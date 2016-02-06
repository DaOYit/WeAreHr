<?php require_once("../includes/dbconnection.php");?>
<?php require_once("../includes/all_functions.php");?>
<?php include("../includes/layouts/header.php");?>

<div class="clearfix"></div>
    <div class="">
       	<div class="col-md-6 col-sm-6 col-xs-12 col-lg-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><i class="fa fa-bars"></i> Tabs <small>Float left</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                             </li>
                             <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                 <ul class="dropdown-menu" role="menu">
                                 <li><a href="#">Settings 1</a>
                                 </li>
                                 <li><a href="#">Settings 2</a>
                                 </li>
                                </ul>
                                 </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                                </ul>
                                <div class="clearfix"></div>
                                </div>
                                <div class="x_content">


                                 <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                     <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Add Topic</a>
                                     </li>
                                     <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab"  aria-expanded="false">Add Problem</a>
                                     </li>
                                     <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Add question</a>
                                      </li>
                                      <li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab3" data-toggle="tab" aria-expanded="false">View Topic</a>
                                      </li>
                                     </ul>
                                    <div id="myTabContent" class="tab-content">
                                         <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                            
                                         	<div class="x_content">

                                    <form class="form-horizontal form-label-left" action="create.php" method="post" novalidate>

                                        <span class="section">Adding Topic</span>

                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="topicName">Enter Topic name <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="topicName" class="form-control col-md-7 col-xs-12"  name="topicName" placeholder="e.g PHP,JAVA, etc" required="required" type="text">
                                            </div>
                                        </div>
                                        
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-3">
                                               
                                                <button id="submit" name="submit" type="submit" class="btn btn-success">ADD</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>


                                        </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                                        <div class="x_content">

                                    		<form class="form-horizontal form-label-left" action="addSyllabus.php" method="POST" novalidate>

                                        		</p>
                                        		<span class="section">Problems Details</span>

                                        		<div class="item form-group">
                                            		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="topicId">Select Topic Name <span class="required">*</span>
                                            		</label>
                                            		<div class="col-md-6 col-sm-6 col-xs-12">
                                                		<select id="topicId" name="topicId" class="form-control" required>
                                                			<?php
																$result=select_Domain();
																while($row=mysqli_fetch_assoc($result))
																{
																	//var_dump($row);
																	echo  "<option>".$row["Domain_Name"]."</option>";
																}
															?>
                                                		</select>
                                            		</div>
                                        		</div>
                                        		<div class="item form-group">
                                            		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="subTopic">Enter sub Topic <span class="required">*</span>
                                            		</label>
                                            		<div class="col-md-6 col-sm-6 col-xs-12">
                                                		<textarea id="subTopic" name="subTopic" required="required" class="form-control col-md-7 col-xs-12" placeholder="e.g Array, Loops, etc. from java"></textarea>
                                            		</div>
                                        		</div>
                                        		<div class="item form-group">
                                            		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="timeToComplete">time to Complete <span class="required">*</span>
                                            		</label>
                                            		<div class="col-md-6 col-sm-6 col-xs-12">
                                               			<input id="timeToComplete" class="form-control col-md-7 col-xs-12"  name="timeToComplete" placeholder="e.g 1 hours" required="required" type="text">
         												</div>
                                        			</div>
                                        			<div class="item form-group">
                                            			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="numberOfQuestion">Number of problems <span class="required">*</span>
                                            			</label>
                                            		<div class="col-md-6 col-sm-6 col-xs-12">
                                                		<input type="number" id="numberOfQuestion" name="numberOfQuestion" required="required" data-validate-minmax="1,100" class="form-control col-md-7 col-xs-12">
                                           			 </div>
                                        		</div>
                                        		<div class="item form-group">
                                            		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="refUrl">Reference Website<span class="required">*</span>
                                            		</label>
                                            		<div class="col-md-6 col-sm-6 col-xs-12">
                                               			<textarea id="refUrl" name="refUrl" class="form-control col-md-7 col-xs-12" placeholder="e.g www.w3school.com"></textarea>
                                            		</div>
                                        		</div>
                                        		<div class="item form-group">
                                            		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="refBook">Reference Book <span class="required">*</span>
                                            		</label>
                                            		<div class="col-md-6 col-sm-6 col-xs-12">
                                              			 <textarea id="refBook" name="refBook" class="form-control col-md-7 col-xs-12" placeholder="e.g name of Book"></textarea>
                                            		</div>
                                        		</div>
                                        		<div class="ln_solid"></div>
                                        		<div class="form-group">
                                           			<div class="col-md-6 col-md-offset-3">
                                                		<button id="submit" name="submit" type="submit" class="btn btn-success">Submit</button>
                                           			 </div>
                                        		</div>
                                    		</form>

                                		</div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                                        <div class="x_content">

                                    		<form class="form-horizontal form-label-left" action="addSyllabus.php" method="POST" novalidate>

                                        		</p>
                                        		<span class="section">Add question</span>

                                        		<div class="item form-group">
                                            		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Select Topic Name <span class="required">*</span>
                                            		</label>
                                            		<div class="col-md-6 col-sm-6 col-xs-12">
                                                		<select id="topicId" name="topicId" class="form-control" required>
                                                			<?php
																$result=select_Domain();
																while($row=mysqli_fetch_assoc($result))
																{
																	//var_dump($row);
																	echo  "<option>".$row["Domain_Name"]."</option>";
																}
															?>
                                                		</select>
                                            		</div>
                                        		</div>
                                        		<div class="item form-group">
                                            		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="subTopic">Syllabus <span class="required">*</span>
                                            		</label>
                                            		<div class="col-md-6 col-sm-6 col-xs-12">
                                                		<textarea id="subTopic" name="subTopic" required="required" class="form-control col-md-7 col-xs-12" placeholder="e.g Array, Loops, etc. from java"></textarea>
                                            		</div>
                                        		</div>
                                        		<div class="item form-group">
                                            		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Question here<span class="required">*</span>
                                            		</label>
                                            		<div class="col-md-6 col-sm-6 col-xs-12">
                                               			<textarea id="refUrl" name="refUrl" class="form-control col-md-7 col-xs-12" placeholder="e.g www.w3school.com"></textarea>
                                            		</div>
                                        		</div>
                                        		<div class="ln_solid"></div>
                                        		<div class="form-group">
                                           			<div class="col-md-6 col-md-offset-3">
                                                		<button id="submit" name="submit" type="submit" class="btn btn-success">Submit</button>
                                           			 </div>
                                        		</div>
                                    		</form>

                                		</div>          
                                        	

                                   	</div>
                                   	<div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
                                               
                                        <div class="row">

                        					<div class="col-md-12 col-sm-12 col-xs-12">
                            					<div class="x_panel">
                                					<div class="x_content">
                                    					<table id="example" class="table table-striped responsive-utilities jambo_table">
                                       						<thead>
                                            					<tr class="headings">
                                                					<th>
                                                    					<input type="checkbox" class="tableflat">
                                                					</th>
                                                					<th>Topic Name</th>
                                                					<th class=" no-link last"><span class="nobr">Action</span>
                                               						</th>
                                            					</tr>
                                        					</thead>
                                        					<?php
																$result=select_Domain();
																while($row=mysqli_fetch_assoc($result))
																{
																	echo "<tbody>";
																	echo "<tr><td class=\"a-center \">";
																	echo "<input type=\"checkbox\" class=\"tableflat\">";
																	echo "</td>";
																	echo "<td>".$row["Domain_Name"]."</td>";
																	echo "<td class=\" last\"><a href=\"#\">View</a>";
																	echo "</td>";
																	echo "</tr>";
																	echo "</tbody>";
																	//echo  "<option>".$row["Domain_Name"]."</option>";
																}
															?>

                                    					</table>
                                					</div>
                            					</div>
                        					</div>

                       						<br />
                        					<br />
                        					<br />
                                        </div>
                               		</div>

                          </div>
                </div>
        </div>
</div>
 
<?php include("../includes/layouts/footer.php");?>