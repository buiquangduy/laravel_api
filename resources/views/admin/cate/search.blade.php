 @extends('admin.master')
 @section('title','search category')
 @section('tit','search Categories')
 @section('content')
    <div class="workplace">
        <div class="row-fluid">
            <div class="span12">
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1>Categories Management</h1>
                    <h2 style="color: red;font-weight: bold;">Tìm thấy <span id="sosp"></span>  sản phẩm</h2>
                    <div class="clear"></div>
                </div>
                <div class="block-fluid table-sorting">
                    <a href="{!! url('admin/cate/add')!!}" class="btn btn-add">Add Category</a>
                    <table cellpadding="0" cellspacing="0" width="100%" class="table" id="tSortable_2">
                        <thead>
                        <tr>
                            <th><input type="checkbox" id="checkAll"/></th>
                            <th width="10%" class="sorting"><a href="#">ID</a></th>
                            <th width="15%" class="sorting"><a href="#">Category Name</a></th>
                            <th width="15%" class="sorting"><a href="#">Alias</a></th>
                            <th width="10%" class="sorting"><a href="#">Active</a></th>
                            <th width="20%" class="sorting"><a href="#">Descrition</a></th>
                            <th width="10%" class="sorting"><a href="#">Time Created</a></th>
                            <th width="10%" class="sorting"><a href="#">Time Updated</a></th>
                            <th colspan="2" width="10%">Action</th>
                        </tr>
                        </thead>
                        <input type="hidden" name="search" id="search" value="<?php echo $search ?>" />
                        <tbody id="searchCategory">
                            
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
        var searchCategoryModule = new SearchCategoryModule();
        searchCategoryModule.init();
    </script>
@endsection