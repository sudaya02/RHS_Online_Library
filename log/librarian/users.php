<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_user.php'); ?>
    <div class="container">
        <div class="margin-top">
            <div class="row">   
            <div class="span2">              
                                        <ul class="nav nav-tabs nav-stacked">
                                            <li>
                                            <a href="#add_user" data-toggle="modal" ><i class="icon-plus icon-large"></i>&nbsp;<strong>Add User</strong></a>
                                            </li>
                                        </ul>
                                        
                                         
     <!-- Modal add user -->
    <?php include('modal_add_user.php'); ?>
                                        
            </div>
            <div class="span10">
            
            
                    
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Users Table</strong>
                                </div>
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Password</th>                                 
                                        <th>Full Name</th>                                 
                                        <th>Contact</th>                                 
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 
                                  <?php $user_query=mysql_query("select * from user")or die(mysql_error());
                                    while($row=mysql_fetch_array($user_query)){
                                    $id=$row['User_ID']; ?>
                                     <tr class="del<?php echo $id ?>">
                                    <td><?php echo $row['Emailadd']; ?></td> 
                                    <td><?php echo $row['Passwordd']; ?></td> 
                                    <td><?php echo $row['Username']; ?></td> 
                                    <td><?php echo $row['Contactno']; ?></td> 
                                    <td width="100">
                                        <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>"  href="#delete_user<?php echo $id; ?>" data-toggle="modal"  class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        <?php include('delete_user_modal.php'); ?>
                                        <a rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" href="#edit<?php echo $id; ?>" data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
                                        <?php include('modal_edit_user.php'); ?>
                                    </td>
                                    <?php include('toolttip_edit_delete.php'); ?>
                                         <!-- Modal edit user -->
                                
                                    </tr>
                                    <?php } ?>
                           
                                </tbody>
                            </table>
                            
<script type="text/javascript">
/*         $(document).ready( function() {
            $('.btn-danger').click( function() {
                var id = $(this).attr("id");
                if(confirm("Are you sure you want to delete this Data?")){
                    $.ajax({
                        type: "POST",
                        url: "delete_user.php",
                        data: ({id: id}),
                        cache: false,
                        success: function(html){
                        $(".del"+id).fadeOut('slow'); 
                        } 
                    }); 
                }else{
                    return false;}
            });             
        }); */
    </script>

            
            </div>      
            </div>
        </div>
    </div>
<?php include('footer.php') ?>