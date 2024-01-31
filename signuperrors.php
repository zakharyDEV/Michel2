<?php
                            
                            if(isset($_GET['error']))
                            {
                                if($_GET['error'] == 'emptyfields')
                                {
                                    echo '<div class="alert alert-danger" role="alert">
                                            <strong>Error: </strong> Fill In All The Fields
                                          </div>';
                                }
                                else if ($_GET['error'] == 'invalidmailuid')
                                {
                                    echo '<div class="alert alert-danger" role="alert">
                                            <strong>Error: </strong> Please enter a valid email and user name
                                          </div>';
                                }
                                else if ($_GET['error'] == 'invalidmail')
                                {
                                    echo '<div class="alert alert-danger" role="alert">
                                            <strong>Error: </strong> Please enter a valid email
                                          </div>';
                                }
                                else if ($_GET['error'] == 'invaliduid')
                                {
                                    echo '<div class="alert alert-danger" role="alert">
                                            <strong>Error: </strong> Please enter a valid user name
                                          </div>';
                                }
                                else if ($_GET['error'] == 'passwordcheck')
                                {
                                    echo '<div class="alert alert-danger" role="alert">
                                            <strong>Error: </strong> Passwords donot match
                                          </div>';
                                }
                                else if ($_GET['error'] == 'usertaken')
                                {
                                    echo '<div class="alert alert-danger" role="alert">
                                            <strong>Error: </strong> This User name is already taken
                                          </div>';
                                }
                                else if ($_GET['error'] == 'invalidimagetype')
                                {
                                    echo '<div class="alert alert-danger" role="alert">
                                            <strong>Error: </strong> Invalid image type 
                                          </div>';
                                }
                                else if ($_GET['error'] == 'imguploaderror')
                                {
                                    echo '<div class="alert alert-danger" role="alert">
                                            <strong>Error: </strong> Image upload error, please try again
                                          </div>';
                                }
                                else if ($_GET['error'] == 'imgsizeexceeded')
                                {
                                    echo '<div class="alert alert-danger" role="alert">
                                            <strong>Error: </strong> Image too large
                                          </div>';
                                }
                                else if ($_GET['error'] == 'sqlerror')
                                {
                                    echo '<div class="alert alert-danger" role="alert">
                                            <strong>Website Error: </strong> Contact admin to have the issue fixed
                                          </div>';
                                }
                            }
                            else if (isset($_GET['signup']) == 'success')
                            {
                                echo '<div class="alert alert-success" role="alert">
                                        <strong>Signup Successful</strong> Please Login from the login menu
                                      </div>';
                            }
                        ?>