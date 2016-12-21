@extends('admin.master')
@section('title','list product')
@section('tit','List product')
@section('content')
<div class="workplace">

        <div class="row-fluid">
            <div class="span12 search">
                <form>
                    <input type="text" class="span11" placeholder="Some text for search..." name="search"/>
                    <button class="btn span1" type="submit">Search</button>
                </form>
            </div>
        </div>
        <!-- /row-fluid-->

        <div class="row-fluid">

            <div class="span12">
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1>Products Management</h1>

                    <div class="clear"></div>
                </div>
                <div class="block-fluid table-sorting">
                    <a href="{!! url('addproduct') !!}" class="btn btn-add">Add Product</a>
                    <table cellpadding="0" cellspacing="0" width="100%" class="table" id="productTable">
                        <thead>
                        <tr>
                            <th><input type="checkbox" name="checkAll" id="checkAll"/></th>
                            <th width="10%" class="sorting"><a href="#">ID</a></th>
                            <th width="20%" class="sorting"><a href="#">Product Name</a></th>
                            <th width="10%" class="sorting"><a href="#">Price</a></th>
                            <th width="15%" class="sorting"><a href="#">Description</a></th>
                            <th width="15%" class="sorting"><a href="#">Activate</a></th>
                            <th width="10%" class="sorting"><a href="#">Time Created</a></th>
                            <th width="10%" class="sorting"><a href="#">Time Updated</a></th>
                            <th width="10%" colspan="2">Action</th>
                        </tr>
                        </thead>
                        <tbody id="products">
                        
                        </tbody>
                    </table>
                    <div class="bulk-action">
                        <a href="#" class="btn btn-success">Activate</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </div><!-- /bulk-action-->
                    <div class="clear"></div>
                </div>
            </div>

        </div>
        <div class="dr"><span></span></div>

    </div>
    <script type="text/javascript">
        var listProductModule = new ListProductModule();
        listProductModule.init();

        var  multilRemoveCategoryModule = new MultilRemoveCategoryModule();
        multilRemoveCategoryModule.initCheckboxMultiple();
    </script>
@endsection