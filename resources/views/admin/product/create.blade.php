@extends('layouts.master-admin')
@section('title')
    {{ __('Add New') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Add New" pagetitle="Products" />

    <div class="grid grid-cols-1 xl:grid-cols-12 gap-x-5">
        <div class="xl:col-span-12">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">Create Product</h6>

                    <form action="{{route('admin.store.products')}}" method="POST">
                        @csrf
                        <div class="grid grid-cols-1 gap-5 lg:grid-cols-2 xl:grid-cols-12">
                            <div class="xl:col-span-6">
                                <label for="productNameInput" class="inline-block mb-2 text-base font-medium">Product
                                    Name</label>
                                <input type="text" id="productNameInput" name="name"
                                       class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                       placeholder="Enter Product Name" >
                                <p class="mt-1 text-sm text-slate-400 dark:text-zink-200">Do not exceed 20 characters when
                                    entering the product name.</p>
                            </div><!--end col-->
                            <div class="xl:col-span-6">
                                <label for="productCodeInput" class="inline-block mb-2 text-base font-medium">Product
                                    Code</label>
                                <input type="text" id="productCodeInput" name="code"
                                       class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                       placeholder="Enter Product Code" value="TWT145015"  >

                            </div><!--end col-->

                            <div class="xl:col-span-4">
                                <label for="categorySelect" class="inline-block mb-2 text-base font-medium">Category</label>
                                <select
                                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    data-choices data-choices-search-false  id="categorySelect" name="category">
                                    <option value="">Select Category</option>
                                    <option value="Mobiles, Computers">Mobiles, Computers</option>
                                    <option value="TV, Appliances, Electronics">TV, Appliances, Electronics</option>
                                    <option value="Men's Fashion">Men's Fashion</option>
                                    <option value="Women's Fashion">Women's Fashion</option>
                                    <option value="Home, Kitchen, Pets">Home, Kitchen, Pets</option>
                                    <option value="Beauty, Health, Grocery">Beauty, Health, Grocery</option>
                                    <option value="Books">Books</option>
                                </select>
                            </div><!--end col-->
                            <div class="xl:col-span-4">
                                <label for="categorySelect" class="inline-block mb-2 text-base font-medium">Brand</label>
                                <select
                                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    data-choices data-choices-search-false id="categorySelect" name="brand">
                                    <option value="">Select Category</option>
                                    <option value="Mobiles, Computers">Mobiles, Computers</option>
                                    <option value="TV, Appliances, Electronics">TV, Appliances, Electronics</option>
                                    <option value="Men's Fashion">Men's Fashion</option>
                                    <option value="Women's Fashion">Women's Fashion</option>
                                    <option value="Home, Kitchen, Pets">Home, Kitchen, Pets</option>
                                    <option value="Beauty, Health, Grocery">Beauty, Health, Grocery</option>
                                    <option value="Books">Books</option>
                                </select>
                            </div><!--end col-->
                            <div class="lg:col-span-2 xl:col-span-12">
                                <label for="genderSelect" class="inline-block mb-2 text-base font-medium">Product
                                    Images</label>
                                <div
                                    class="flex items-center justify-center bg-white border border-dashed rounded-md cursor-pointer dropzone border-slate-300 dark:bg-zink-700 dark:border-zink-500 dropzone2">
                                    <div class="fallback">
                                        <input type="file" multiple="multiple" name="image">
                                    </div>
                                    <div class="w-full py-5 text-lg text-center dz-message needsclick">
                                        <div class="mb-3">
                                            <i data-lucide="upload-cloud"
                                               class="block size-12 mx-auto text-slate-500 fill-slate-200 dark:text-zink-200 dark:fill-zink-500"></i>
                                        </div>

                                        <h5 class="mb-0 font-normal text-slate-500 dark:text-zink-200 text-15">Drag and
                                            drop your product images or <a href="#!">browse</a> your product images
                                        </h5>
                                    </div>
                                </div>

                                <ul class="flex flex-wrap mb-0 gap-x-5" id="dropzone-preview2">
                                    <li class="mt-5" id="dropzone-preview-list2">
                                        <!-- This is used as the file preview template -->
                                        <div class="border rounded border-slate-200 dark:border-zink-500">
                                            <div class="p-2 text-center">
                                                <div>
                                                    <div
                                                        class="p-2 mx-auto rounded-md size-14 bg-slate-100 dark:bg-zink-600">
                                                        <img data-dz-thumbnail class="block w-full h-full rounded-md"
                                                             src="assets/images/new-document.png" alt="Dropzone-Image">
                                                    </div>
                                                </div>
                                                <div class="pt-3">
                                                    <h5 class="mb-1 text-15" data-dz-name>&nbsp;</h5>
                                                    <p class="mb-0 text-slate-500 dark:text-zink-200" data-dz-size></p>
                                                    <strong class="error text-danger" data-dz-errormessage></strong>
                                                </div>
                                                <div class="mt-2">
                                                    <button data-dz-remove
                                                            class="px-2 py-1.5 text-xs text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="lg:col-span-2 xl:col-span-12">
                                <div>
                                    <label for="productDescription"
                                           class="inline-block mb-2 text-base font-medium">Description</label>
                                    <textarea
                                        class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                        id="productDescription" name="description" placeholder="Enter Product Description" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="xl:col-span-4">
                                <label for="productPrice" class="inline-block mb-2 text-base font-medium">Price</label>
                                <input type="number" id="productPrice" name="price"
                                       class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                       placeholder="$0.00" >
                            </div><!--end col-->

                            <div class="xl:col-span-4">
                                <label for="productStatus" class="inline-block mb-2 text-base font-medium">Status</label>
                                <select
                                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    data-choices data-choices-search-false  id="productStatus" name="status">
                                    <option value="Draft">Draft</option>
                                    <option value="Published">Published</option>
                                    <option value="Scheduled">Scheduled</option>
                                    <option value="Entertainment">Entertainment</option>
                                </select>
                            </div><!--end col-->

                        </div><!--end grid-->
                        <div class="flex justify-end gap-2 mt-4">
                            <button type="reset"
                                    class="text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-700 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10">Reset</button>
                            <button type="submit"
                                    class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Create
                                Product</button>
                            <button type="button"
                                    class="text-white bg-green-500 border-green-500 btn hover:text-white hover:bg-green-600 hover:border-green-600 focus:text-white focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-100 active:text-white active:bg-green-600 active:border-green-600 active:ring active:ring-green-100 dark:ring-green-400/10">Draft
                                & Preview</button>
                        </div>
                    </form>
                </div>
            </div><!--end card-->
        </div><!--end col-->
    </div><!--end grid-->
@endsection
@push('scripts')
    <!-- dropzone -->
    <script src="{{ URL::asset('build/libs/dropzone/dropzone-min.js') }}"></script>
    <!--product create init js-->
    <script src="{{ URL::asset('build/js/pages/apps-ecommerce-product-create.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
    <script src="{{ URL::asset('js/eventImage.js') }}"></script>
@endpush
