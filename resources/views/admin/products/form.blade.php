<div class="container-fluid">
        <div class="row product-adding">
                <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>General Information</h5>
                            </div>
                            <div class="card-body">
                                <div class="digital-add needs-validation">
                                    <div class="form-group">
                                        <label for="validationCustom01" class="col-form-label pt-0"><span>*</span> Name</label>
                                        <input name="name" class="form-control" id="validationCustom01" type="text" required="" value="{{old('name') ?? $product->name}}">
                                        <div>{{$errors->first('name')}}</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="validationCustomtitle" class="col-form-label pt-0"><span>*</span>Product Price</label>
                                        <input name="price" class="form-control" id="validationCustomtitle" type="text" required="" value="{{old('price') ?? $product->price}}">
                                        <div>{{$errors->first('name')}}</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label"><span>*</span> Company Name</label>
                                        <select name="company_id" class="custom-select" required="">
                                           @foreach($companies as $company)
                                                <option value="{{$company->id}}" {{$company->id == $product->company_id ? 'selected':''}}>{{$company->name}}</option>
                                           @endforeach
                                        </select>
                                        <div>{{$errors->first('company')}}</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label"><span>*</span> Category Name</label>
                                        <select name="category_id" class="custom-select" required="">
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}" {{$category->id == $product->category_id ? 'selected':''}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                        <div>{{$errors->first('category')}}</div>
                                    </div>
                                   
                                    <div class="form-group">
                                        <label class="col-form-label">Product Specification</label>
                                        <textarea rows="5"name="details" cols="12">{{old('details') ?? $product->details}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="validationCustom02" class="col-form-label"><span>*</span> Product Quantity</label>
                                        <input name="quantity" class="form-control" id="validationCustom02" type="text" required="" value="{{old('quantity') ?? $product->quantity}}">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label"><span>*</span> Status</label>
                                        <div class="m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                            @foreach($product->stockOption() as $stockOptionKey=>$stockOptionValue)
                                            <label class="d-block" for="{{$stockOptionKey}}">
                                                <input class="radio_animated" id="{{$stockOptionKey}}" type="radio" name="stock" value="{{$stockOptionKey}}" {{$product->stock == $stockOptionKey ? 'checked':''}}>
                                                {{$stockOptionValue}}
                                            </label>
                                            @endforeach
                                        </div>
                                    </div>
                                    

                                   
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-xl-6">
                      
                        <div class="card">
                            <div class="card-header">
                                <h5>Product Picture</h5>
                            </div>
                            <div class="card-body">
                                <div class="digital-add needs-validation">
                                    <div class="form-group d-flex flex-column">
                                   
                                        @if($product->image)
                                            <div>
                                                <img style="width:100px; height:100px;"class="thumbnail"src="{{asset('storage/'.$product->image)}}" alt="">
                                            </div>
                                        @endif
                                   
                                        <input type="file" name="image" class="py-3">
                                        <div>{{$errors->first('image')}}</div>
                                    </div>         
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                            <div class="form-group mb-0">
                                        <div class="product-buttons text-center">
                                            @yield('button')
                                        </div>
                                    </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>