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
                                     <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Exam generation</a>
                                      </li>
                                      <li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab3" data-toggle="tab" aria-expanded="false">Exam Details</a>
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
                                            		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="topicId">Select Course Name <span class="required">*</span>
                                            		</label>
                                            		<div class="col-md-6 col-sm-6 col-xs-12">
                                                		<select id="topicId" name="topicId" class="form-control" required>
                                                			<?php
																$result=select_Domain();
																while($row =$result->fetch_assoc())
																{
																	//var_dump($row);
																	echo  "<option>".$row["topic_Name"]."</option>";
																}
																
															?>
                                                		</select>
                                            		</div>
                                        		</div>
                                        		<div class="item form-group">
                                            		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="broadTopic">Broad Topic <span class="required">*</span>
                                            		</label>
                                            		<div class="col-md-6 col-sm-6 col-xs-12">
                                                		<textarea id="broadTopic" name="broadTopic" required="required" class="form-control col-md-7 col-xs-12" placeholder="e.g Array, Loops, etc. from java"></textarea>
                                            		</div>
                                        		</div>
                                        		<div class="item form-group">
                                            		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="questionName">Name of Question<span class="required">*</span>
                                            		</label>
                                            		<div class="col-md-6 col-sm-6 col-xs-12">
                                               			<textarea id="questionName" name="questionName" required="required" class="form-control col-md-7 col-xs-12" placeholder="e.g question over here"></textarea>
         												</div>
                                        			</div>
                                        			<div class="item form-group">
                                            		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="questionType">type of Question<span class="required">*</span>
                                            		</label>
                                            		<div class="col-md-6 col-sm-6 col-xs-12">
                                                		<select id="questionType" name="questionType" class="form-control" required>
                                                			<option>Single Choice</option>
                                                			<option>Multiple Choice</option>
                                                			<option>Description</option>
                                                		</select>
                                            		</div>
                                            		</div>
                                        			<div class="item form-group">
                                            			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="numberOfOption">How many option<span class="required">*</span>
                                            			</label>
                                            		<div class="col-md-6 col-sm-6 col-xs-12">
                                                		<input type="number" id="numberOfOption" name="numberOfOption" required="required" data-validate-minmax="1,100" class="form-control col-md-7 col-xs-12">
                                           			 </div>
                                        		</div>
                                        		<div class="item form-group">
                                            		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="questionDesc">Question Description<span class="required">*</span>
                                            		</label>
                                            		<div class="col-md-6 col-sm-6 col-xs-12">
                                               			<textarea id="questionDesc" name="questionDesc" class="form-control col-md-7 col-xs-12" placeholder="e.g www.w3school.com"></textarea>
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
																while($row =$result->fetch_assoc())
																{
																	//var_dump($row);
																	echo  "<option>".$row["topic_Name"]."</option>";
																}
															?>
                                                		</select>
                                            		</div>
                                        		</div>
                                        		<div class="item form-group">
                                            		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="numberOfQuestion">Total Number of Question<span class="required">*</span>
                                            		</label>
                                            		<div class="col-md-6 col-sm-6 col-xs-12">
                                                		<input type="number" id="numberOfQuestion" name="numberOfQuestion" required="required" data-validate-minmax="1,100" class="form-control col-md-7 col-xs-12">
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
                                   		<div class="x_content">

                                    		<form class="form-horizontal form-label-left" action="addSyllabus.php" method="POST" novalidate>

                                        		<div class="item form-group">
                                            		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="topicId">Select Course Name <span class="required">*</span>
                                            		</label>
                                            		<div class="col-md-6 col-sm-6 col-xs-12">
                                                		<select id="topicId" name="topicId" class="form-control" required>
                                                			<?php
																$result=select_Domain();
																while($row =$result->fetch_assoc())
																{
																	//var_dump($row);
																	echo  "<option>".$row["topic_Name"]."</option>";
																}
															?>
                                                		</select>
                                            		</div>
                                        		</div>
                                        		<div class="item form-group">
                                            		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="numberOfQuestion">Exam Date<span class="required">*</span>
                                            		</label>
                                                	<div class="control-group">
                                                    	<div class="controls">
                                                        	<div class="col-md-6 col-sm-6 col-xs-12 has-feedback">
                                                            	 <input type="text" class="form-control has-feedback-right col-md-7 col-xs-12" id="single_cal1" placeholder="select Date" aria-describedby="inputSuccess2Status">
                                                           		 <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="false"></span>
                                                           		 
                                                        	</div>
                                                    	</div>
                                                	</div>
                                        		</div> 
                                        		<div class="item form-group">
                                            		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="numberOfQuestion">Start Time<span class="required">*</span>
                                            		</label>
                                                	<div class="control-group">
                                                    	<div class="controls">
                                                        	<div class="col-md-6 col-sm-6 col-xs-12 has-feedback">
                                                            	 <input type="text" class="form-control has-feedback-right col-md-7 col-xs-12" id="single_cal" placeholder="E.g 00:00:00" aria-describedby="inputSuccess2Status">
                                                           		 <span class="glyphicon glyphicon-time form-control-feedback right" aria-hidden="false"></span>
                                                           		 
                                                        	</div>
                                                    	</div>
                                                	</div>
                                        		</div> 
                                        		<div class="item form-group">
                                            		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="numberOfQuestion">End Time<span class="required">*</span>
                                            		</label>
                                                	<div class="control-group">
                                                    	<div class="controls">
                                                        	<div class="col-md-6 col-sm-6 col-xs-12 has-feedback">
                                                            	 <input type="text" class="form-control has-feedback-right col-md-7 col-xs-12" id="single_cal" placeholder="E.g 00:00:00" aria-describedby="inputSuccess2Status">
                                                           		 <span class="glyphicon glyphicon-time form-control-feedback right" aria-hidden="false"></span>
                                                           		 
                                                        	</div>
                                                    	</div>
                                                	</div>
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

                          </div>
                </div>
        </div>
</div>
 
<?php include("../includes/layouts/footer.php");?>