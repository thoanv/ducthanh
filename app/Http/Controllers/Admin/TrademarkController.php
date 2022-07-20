<?php

namespace App\Http\Controllers\Admin;

use App\Models\Trademark;
use App\Http\Requests\StoreTrademarkRequest;
use App\Http\Requests\UpdateTrademarkRequest;
use App\Http\Controllers\Controller;
use App\Repositories\TrademarkRepository as TrademarkRepo;
use Illuminate\Support\Str;

class TrademarkController extends Controller
{
    protected $view = 'admin.trademarks';
    protected $route = 'trademarks';
    protected $trademarkRepo;
    public function __construct(TrademarkRepo $trademarkRepo)
    {
        $this->trademarkRepo = $trademarkRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Trademark $trademark)
    {
        $this->authorize('viewAny', $trademark);
        $trademarks = $this->trademarkRepo->getData();
        return view($this->view.'.index',[
            'trademarks' => $trademarks,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Trademark $trademark)
    {
        $this->authorize('create', $trademark);
        return view($this->view.'.create',[
            'trademark' => $trademark,
            'view' => $this->view,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTrademarkRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTrademarkRequest $request)
    {
        $data = $request->only('name', 'avatar');
        $data['status'] = isset($request['status']) ? 1 : 0;
        $data['slug'] = Str::slug($request->name);
        $this->trademarkRepo->create($data);
        return redirect(route($this->route.'.index'))->with('success',  'Thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trademark  $trademark
     * @return \Illuminate\Http\Response
     */
    public function show(Trademark $trademark)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trademark  $trademark
     * @return \Illuminate\Http\Response
     */
    public function edit(Trademark $trademark)
    {
        $this->authorize('update', $trademark);
        return view($this->view.'.update',[
            'trademark' => $trademark,
            'view' => $this->view,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTrademarkRequest  $request
     * @param  \App\Models\Trademark  $trademark
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTrademarkRequest $request, Trademark $trademark)
    {
        $data = $request->only('name', 'avatar');
        $data['status'] = isset($request['status']) ? 1 : 0;
        $data['slug'] = Str::slug($request->name);
        $this->trademarkRepo->update($data, $trademark['id']);
        return redirect(route($this->route.'.index'))->with('success',  'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trademark  $trademark
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trademark $trademark)
    {
        $this->authorize('delete', $trademark);
        $trademark->delete();
        return redirect(route($this->route.'.index'))->with('success', 'Xóa thành công');
    }
}
