<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Unit;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Services\BarcodeService;
use Picqer\Barcode\BarcodeGeneratorPNG;

class ProductController extends Controller
{
    use AuthorizesRequests;

    /**
     * Listagem.
     */
    public function index(Request $request)
    {
        $this->authorize('viewAny', Product::class);

        $query = Product::with(['category', 'brand', 'unit'])
            ->where('company_id', auth()->user()->company_id);

        if ($request->filled('search')) {

            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('code', 'like', "%{$search}%")
                    ->orWhere('sku', 'like', "%{$search}%")
                    ->orWhere('barcode', 'like', "%{$search}%")
                    ->orWhere('name', 'like', "%{$search}%");
            });
        }

        $products = $query
            ->orderBy('name')
            ->paginate(15);

        return view('products.index', compact('products'));
    }

    /**
     * Formulário de criação.
     */
    public function create()
    {
        $this->authorize('create', Product::class);

        $categories = Category::where('company_id', auth()->user()->company_id)
            ->where('active', true)
            ->orderBy('name')
            ->get();

        $brands = Brand::where('company_id', auth()->user()->company_id)
            ->where('active', true)
            ->orderBy('name')
            ->get();

        $units = Unit::where('company_id', auth()->user()->company_id)
            ->where('active', true)
            ->orderBy('name')
            ->get();

        return view('products.create', compact(
            'categories',
            'brands',
            'units'
        ));
    }

    /**
     * Salvar.
     */
    public function store(StoreProductRequest $request, BarcodeService $barcodeService)
    {
        $this->authorize('create', Product::class);

        Product::create([
            'company_id' => auth()->user()->company_id,

            'category_id' => $request->category_id,
            'brand_id' => $request->brand_id,
            'unit_id' => $request->unit_id,

            'code' => Product::generateCode(
                auth()->user()->company_id
            ),
            'sku' => $request->sku,
            'barcode' => $request->barcode ?: $barcodeService->generateEAN13(),

            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,

            'type' => $request->type,

            'ncm' => $request->ncm,
            'cest' => $request->cest,
            'cfop' => $request->cfop,
            'origin' => $request->origin,
            'cst_icms' => $request->cst_icms,
            'csosn' => $request->csosn,

            'stock_control' => $request->boolean('stock_control'),
            'allow_negative_stock' => $request->boolean('allow_negative_stock'),

            'minimum_stock' => $request->minimum_stock ?? 0,
            'maximum_stock' => $request->maximum_stock ?? 0,

            'location' => $request->location,

            'batch_control' => $request->boolean('batch_control'),
            'expiration_control' => $request->boolean('expiration_control'),

            'gross_weight' => $request->gross_weight ?? 0,
            'net_weight' => $request->net_weight ?? 0,

            'height' => $request->height ?? 0,
            'width' => $request->width ?? 0,
            'length' => $request->length ?? 0,

            'cost_price' => $request->cost_price ?? 0,
            'sale_price' => $request->sale_price ?? 0,
            'promotional_price' => $request->promotional_price,
            'profit_margin' => $request->profit_margin ?? 0,

            'featured' => $request->boolean('featured'),
            'active' => $request->boolean('active'),
        ]);

        return redirect()
            ->route('products.index')
            ->with('success', 'Produto cadastrado com sucesso.');
    }

    /**
     * Visualizar.
     */
    public function show(Product $product)
    {
        $this->authorize('view', $product);

        $product->load([
            'category',
            'brand',
            'unit',
        ]);

        return view('products.show', compact('product'));
    }

    /**
     * Formulário de edição.
     */
    public function edit(Product $product)
    {
        $this->authorize('update', $product);

        $categories = Category::where('company_id', auth()->user()->company_id)
            ->where('active', true)
            ->orderBy('name')
            ->get();

        $brands = Brand::where('company_id', auth()->user()->company_id)
            ->where('active', true)
            ->orderBy('name')
            ->get();

        $units = Unit::where('company_id', auth()->user()->company_id)
            ->where('active', true)
            ->orderBy('name')
            ->get();

        return view('products.edit', compact(
            'product',
            'categories',
            'brands',
            'units'
        ));
    }

    /**
     * Atualizar.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $this->authorize('update', $product);

        $product->update([
            'category_id' => $request->category_id,
            'brand_id' => $request->brand_id,
            'unit_id' => $request->unit_id,

            'code' => $request->code,
            'sku' => $request->sku,
            'barcode' => $product->barcode,

            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,

            'type' => $request->type,

            'ncm' => $request->ncm,
            'cest' => $request->cest,
            'cfop' => $request->cfop,
            'origin' => $request->origin,
            'cst_icms' => $request->cst_icms,
            'csosn' => $request->csosn,

            'stock_control' => $request->boolean('stock_control'),
            'allow_negative_stock' => $request->boolean('allow_negative_stock'),

            'minimum_stock' => $request->minimum_stock ?? 0,
            'maximum_stock' => $request->maximum_stock ?? 0,

            'location' => $request->location,

            'batch_control' => $request->boolean('batch_control'),
            'expiration_control' => $request->boolean('expiration_control'),

            'gross_weight' => $request->gross_weight ?? 0,
            'net_weight' => $request->net_weight ?? 0,

            'height' => $request->height ?? 0,
            'width' => $request->width ?? 0,
            'length' => $request->length ?? 0,

            'cost_price' => $request->cost_price ?? 0,
            'sale_price' => $request->sale_price ?? 0,
            'promotional_price' => $request->promotional_price,
            'profit_margin' => $request->profit_margin ?? 0,

            'featured' => $request->boolean('featured'),
            'active' => $request->boolean('active'),
        ]);

        return redirect()
            ->route('products.index')
            ->with('success', 'Produto atualizado com sucesso.');
    }

    /**
     * Excluir.
     */
    public function destroy(Product $product)
    {
        $this->authorize('delete', $product);

        $product->delete();

        return redirect()
            ->route('products.index')
            ->with('success', 'Produto removido com sucesso.');
    }

    public function barcode(Product $product)
    {
        $this->authorize('view', $product);

        if (!$product->barcode) {

            abort(404, 'Produto sem código de barras.');
        }

        if (strlen($product->barcode) != 13 || !ctype_digit($product->barcode)) {

            abort(422, 'Código de barras inválido para EAN13.');
        }


        $generator = new BarcodeGeneratorPNG();


        $barcode = base64_encode(
            $generator->getBarcode(
                $product->barcode,
                BarcodeGeneratorPNG::TYPE_EAN_13
            )
        );


        return view(
            'products.barcode',
            compact(
                'product',
                'barcode'
            )
        );
    }
}
