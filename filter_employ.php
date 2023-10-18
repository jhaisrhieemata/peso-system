<?php
if(isset($_GET['date_joined']) && $_GET['date_joined'] != '' && isset($_GET['employment_status']) && $_GET['employment_status'] != ''){
                                               $date_joined = validate($_GET['date_joined']);
                                               $employment_status = validate($_GET['employment_status']);
                                                $employ = mysqli_query($connection, "SELECT * FROM  mis_employment WHERE date_joined='$date_joined' AND employment_status='$employment_status' ORDER BY id DESC");
                                            }else{
                                                $employ = mysqli_query($connection, "SELECT * FROM mis_employment ORDER BY employment_id DESC");

                                            }
                                            if($employ)
                                            {
                                               if(mysqli_num_rows($employ) > 0)
                                               {
                                                    foreach($employ as $row)
                                                    {  
                                                        ?>
                                                           <tbody>
                                                              <tr>
                                                                   <td><?php echo $row['employment_id']; ?></td>
                                                                   <td><?php echo $row['firstname']; ?> <?php echo $row['middlename']; ?> <?php echo $row['surname']; ?> </td>                                      
                                                                   <td><?php echo $row['date_of_birth']; ?></td>
                                                                   <td><?php echo $row['sex']; ?></td>
                                                                   <td><?php echo $row['civil_status']; ?></td>
                                                                   <td><?php echo $row['contact_number']; ?></td>
                                                                   <td><?php echo $row['employment_status']; ?></td>
                                                                   <td><?php echo $row['date_joined']; ?></td>
                                                                   <td>
                                                                        <a href="mis_admin_manage_employment.php?delete=<?php echo $row['employment_id']; ?>" class="badge badge-danger"><i class=" mdi mdi-trash-can-outline "></i> Delete</a>
                                                                        <a href="mis_admin_view_single_employment.php?employment_id=<?php echo $row['employment_id']; ?>&&surname=<?php echo $row['surname']; ?> " class="badge badge-success"><i class="mdi mdi-eye"></i> View</a>
                                                                        <a href="mis_admin_update_single_employment.php?employment_id=<?php echo $row['employment_id']; ?>" class="badge badge-primary"><i class="mdi mdi-check-box-outline "></i> Update</a>
                                                                    </td>
                                                              </tr>
                                                          </tbody>
                                                        <?php
                                                       }
                                               }
                                               else
                                               {
                                                  ?>
                                                  <tr>
                                                    <td colspan="10">no record found</td>
                                                  </tr>
                                                  <?php
                                               }
                                            }