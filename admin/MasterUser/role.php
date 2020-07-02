   <!-- page content -->
   <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Master Role </h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2<small>Users</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <p class="text-muted font-13 m-b-30">
                      <a  class="btn btn-success text-light" id="addRole"><i class="fa fa-plus"></i> Add New</a>
                    </p>
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Role Id</th>
                          <th>Role Name</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php 
                            $querySelectUser =  mysqli_query($conn,"SELECT * FROM role where IsActive='1'");
                            $elementActive = "<input type='checkbox' checked='true'/>";
                            $elementCheck = "<input type='checkbox'/>";
                        foreach ($querySelectUser as $data) :
                        ?>
                        <tr>
                            <td><?=$data["Id"]?></td>
                            <td><?=$data["Name"]?></td>
                            <td class="text-center">
                               <a data-id="<?= $data["Id"] ?>"  data-role="editRole" class="btn btn-primary text-light" title="Edit"><i class="fa fa-edit"></i></a>
                               |
                               <a data-id="<?= $data["Id"] ?>"  data-role="deleteRole" class="btn btn-danger text-light" title="Delete"
                               
                               ><i class="fa fa-remove"></i></a>
                             </td>
                        </tr>
                        <?php endforeach;?>
                      </tbody>
                    </table>
                  </div>
                  </div>
              </div>
            </div>
                </div>
              </div>

                </div>
              </div>
            </div>
          </div>
          <!-- Modal -->
   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
          
           <h4 class="modal-title" id="myModalLabel">Form Role</h4>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         </div>
         <div class="modal-body">
           <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
              <input type="hidden" id="id"/>
             <div class="item form-group">
               <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Role Name <span class="required">*</span>
               </label>
               <div class="col-md-6 col-sm-6 ">
                 <input type="text" id="name" required="required" name="name" placeholder="Enter name" class="form-control ">
               </div>
             </div>
             

           </form>
         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-primary" id="submit">Save changes</button>
           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         </div>
       </div>
     </div>
        </div>