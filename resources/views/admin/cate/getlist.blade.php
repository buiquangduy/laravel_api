 @extends('admin.master')
 @section('title','list category')
 @section('tit','List Categories')
 @section('content')
      <div class="workplace">
        <div class="row-fluid">
            <div class="span12 search">
                <form action="#" method="get">
                    <input type="hidden" name="_token" value="{!! csrf_token()!!}" />
                    <input type="text" class="span11" placeholder="Some text fo rsearch..." name="search"/>
                    <button class="btn span1" type="submit">Search</button>
                </form>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1>Categories Management</h1>
                    <div class="clear"></div>
                </div>
                <div class="block-fluid table-sorting">
                    <a href="#" class="btn btn-add">Add Category</a>
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
                        <input type="hidden" id="id" name="id" value="<?php echo $id ?>" />
                        <tbody id="getcates">
                        <tr>
                           
                        </tr>
                        </tbody>
                    </table>
                    <div class="bulk-action">
                        <a href="#" class="btn btn-success">Activate</a>
                        <button class="btn btn-danger" id="delete_value">Delete</button> 
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

        </div>
        <div class="dr"><span></span></div>
    </div>
     <script type="text/javascript">
        var getListCategoryModule = new GetListCategoryModule();
        getListCategoryModule.init();
    </script>
@endsection