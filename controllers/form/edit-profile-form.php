<form action="components/update-profile.php" method="post" enctype="multipart/form-data" id="UploadForm">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
		<li class="active"><a href="#PrimaryInformation" data-toggle="tab">Primary Information</a></li>
		<li><a href="#resume" data-toggle="tab">Resume</a></li>
		<li><a href="#education" data-toggle="tab">Education</a></li>
		<li><a href="#experience" data-toggle="tab">Experience</a></li>
		<li><a href="#add_info" data-toggle="tab">Additional Info</a></li>
    </ul>
	
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane fade in active" id="PrimaryInformation">  
			</br>
			<div class="form-group float-label-control">                      
				<button type="button" onclick="alert('Hello world!')">in</button>
				<button type="button" onclick="alert('Hello world!')">f</button>
				<label for="">Import Profile from Online Social Network</label>
			</div>   
			<div class="col-md-6">
				<div class="form-group float-label-control">                      
					<label for="">Name</label>
					<input type="text" class="form-control" name="user_name">
				</div>
				<div class="form-group float-label-control">
					<label for="">Email</label> 
					<input type="text" class="form-control" name="user_email">
				</div> 
				<div class="form-group float-label-control">  
					<label for="">Current Address</label>
					<textarea rows="2"  name="user_currentaddress" ></textarea>
					&nbsp;&nbsp;&nbsp;
					<label for="">Country</label>	
					<select name="user_currentcountry">
						<option value="US">US</option>
						<option value="INDIA">INDIA</option>
						<option value="UK">UK</option>
						<option value="CANADA">CANADA</option>
					</select>
				</div>
				<div class="form-group float-label-control">  
					<label for="">Gender</label>
					<input type="radio" name="user_gender" value="male"> Male
					<input type="radio" name="user_gender" value="female"> Female
				</div>
				<div>	
					<label for="">Veteran Status</label>	
					<select name="user_veteran" >
						<option value="no">No. I am not a Veteran</option>
						<option value="yes">Yes. I am a Veteran</option>
						<option value="disclose">Do not want to disclose</option>
					</select>
				</div>

                <!--<div class="form-group float-label-control">
                    <label for="">Avatar</label>
                    <input name="ImageFile" type="file" id="uploadFile"/>
                    <div class="col-md-6">
                        <div class="shortpreview">
                            <label for="">Previous Avatar </label>
                            <br> 
                            <img src="userfiles/avatars/<?php echo $rws['user_avatar'];?>" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="shortpreview" id="uploadImagePreview">
                            <label for="">Current Uploaded Avatar </label>
                            <br> 
                            <div id="imagePreview"></div>
                        </div>
                    </div>
                </div>
-->
			</div>  
			<div class="col-md-6">
				<div class="form-group float-label-control">
					<label >Id</label>
					<input name="user_ufid" type="text" class="form-control">
				</div>
				<div class="form-group float-label-control">
					<label >Ph No</label>
					<input name="user_phno" type="text" class="form-control">
				</div>
				<div class="form-group float-label-control">  
					<label>Permanent Address</label>
					<textarea name="user_permanentaddress" rows="2" ></textarea>
					&nbsp;&nbsp;&nbsp;
					<label >Country</label>	
					<select  name="user_permanentcountry" >
						<option value="US">US</option>
						<option value="INDIA">INDIA</option>
						<option value="UK">UK</option>
						<option value="CANADA">CANADA</option>
					</select>
				</div>
				<div class="form-group float-label-control">	
					<label >Disability</label>	
					<select  name="user_disability">
						<option value="no">No. I do not have Disability</option>
						<option value="yes">Yes. I have a Disability</option>
						<option value="disclose">I do not want to disclose</option>
					</select>
				</div>
				<div>	
					<label for="">Visa Status</label>	
					<select name="user_visa">
						<option value="F1">F1</option>
						<option value="F2">F2</option>
						<option value="G1">G1</option>
						<option value="G2">G2</option>
					</select>
				</div>                 
			</div>
		</div>
		<div class="tab-pane fade" id="personal">
			<div class="form-group float-label-control">                      
				<label for="">Import Resume from Computer</label>
				<form method="post" enctype="multipart/form-data"> 
					<table width="350" border="0" cellpadding="1" cellspacing="1" class="box"> 
						<tr>  
							<td width="246"> 
								<input type="hidden" name="MAX_FILE_SIZE" value="2000000"> 
								<input name="userfile" type="file" id="userfile">  
							</td> 
							<td width="80">
								<input name="upload" type="submit" class="box" id="upload" value=" Upload ">
							</td> 
						</tr> 
					</table> 
				</form> 
				<div class="form-group float-label-control">
					<label for="">Enter Resume as Text</label>
					<textarea class="form-control" rows="5" name="user_resume" value="<?php echo $rws['user_resume'];?>"></textarea>
				</div>
			</div>
			<div class="form-group float-label-control">                            
				<label>
					Import CoverLetter from Computer
				</label>
				<form method="post" enctype="multipart/form-data"> 
					<table width="350" border="0" cellpadding="1" cellspacing="1" class="box"> 
						<tr>  
							<td width="246"> 
								<input type="hidden" name="MAX_FILE_SIZE" value="2000000"> 
								<input name="userfile" type="file" id="userfile">  
							</td> 
							<td width="80">
								<input name="upload" type="submit" class="box" id="upload" value=" Upload ">
							</td> 
						</tr> 
					</table> 
				</form> 
				<div class="form-group float-label-control">
					<label>Enter CoverLetter as Text</label>
					<textarea class="form-control" rows="5" name="user_coverletter" value="<?php echo $rws['user_coverletter'];?>"></textarea>
				</div>
			</div>		
		</div>
		<div class="tab-pane fade in active" id="Education">         
			<div class="col-md-6">
				<div class="form-group float-label-control">                      
					<div class="form-group float-label-control">                      
						<label for="">School</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group float-label-control">  
						<table>
							<tr>
								<th>
									<label for="">Dates Attended</label>
								</th>
							</tr>
							<tr>
								<td>
									<input id="date1" type="text" size="25">
									<a href="javascript:NewCal('date1','ddmmyyyy')">
										<img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date">
									</a>
								</td>
								<td>-</td>
								<td>
									<input id="date2" type="text" size="25">
									<a href="javascript:NewCal('date2','ddmmyyyy')">
										<img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date">
									</a>
								</td>
							</tr>
						</table>
					</div>
					<div>	
						<label for="">Degree</label>	
						<select>
							<option value="Batchelors">Batchelors</option>
							<option value="Masters">Masters</option>  
						</select>
					</div>
					<div class="form-group float-label-control">                      
						<label for="">Field of Study</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group float-label-control">                      
						<label for="">Grade</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group float-label-control">
						<label for="">Activities and Societies</label>
						<textarea class="form-control" placeholder="<?php echo $rws['user_shortbio'];?>" rows="3" placeholder="<?php echo $rws['user_shortbio'];?>" name="activities" value="<?php echo $rws['user_shortbio'];?>"><?php echo $rws['user_shortbio'];?></textarea>
					</div>
					<div class="form-group float-label-control">
						<label for="">Description</label>
						<textarea class="form-control" placeholder="<?php echo $rws['user_shortbio'];?>" rows="5" placeholder="<?php echo $rws['user_shortbio'];?>" name="Description" value="<?php echo $rws['user_shortbio'];?>"><?php echo $rws['user_shortbio'];?></textarea>
					</div>
					<button class="btn btn-primary ladda-button" data-style="zoom-in" type="submit"  id="SubmitButton" value="Upload" />+ Add Education</button>
				</div>
			</div>   
		</div>
		<div class="tab-pane fade in active" id="Experience">         
			<div class="col-md-6">
				<div class="form-group float-label-control">                      
					<div class="form-group float-label-control">                      
						<label for="">Company Name</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group float-label-control">
						<label for="">Title</label> 
						<input type="text" class="form-control">
					</div> 
					<div class="form-group float-label-control">
						<label for="">Location</label> 
						<input type="text" class="form-control">
					</div> 
					<div class="form-group float-label-control">  
						<table>
							<tr>
								<td><label for="">Time Period</label></td>
								<tr><td><input id="demo1" type="text" size="25"><a href="javascript:NewCal('demo1','ddmmyyyy')"><img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a></td><td>-</td><td><input id="demo1" type="text" size="25"><a href="javascript:NewCal('demo1','ddmmyyyy')"><img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a></td>
							</tr>
						</table>
					</div>	
					<div class="form-group float-label-control">
						<label for="">Description</label>
						<textarea class="form-control" placeholder="<?php echo $rws['user_shortbio'];?>" rows="10" placeholder="<?php echo $rws['user_shortbio'];?>" name="user_shortbio" value="<?php echo $rws['user_shortbio'];?>"><?php echo $rws['user_shortbio'];?></textarea>
					</div>
					<button class="btn btn-primary ladda-button" data-style="zoom-in" type="submit"  id="SubmitButton" value="Upload" />+ Add Position</button>
				</div>
			</div>   
		</div>
		<div class="tab-pane fade" id="add_info">
			<div class="col-md-6">
				<div>	
					<label for="">Languages</label>	
					<select>
						<option value="English">English</option>
						<option value="French">French</option>
						<option value="German">German</option>
						<option value="Chinese">Chinese</option>
					</select>
				</div>
				<div class="form-group float-label-control">  
					<label for="">Relocation Preference</label>
					<input type="radio" name="relocate" value="Yes"> Yes
					<input type="radio" name="relocate" value="No"> No
				</div>	
			</div>
		</div>
	</div>	 
	<br>
	<div class="submit">
		<center>
			<input class="btn btn-primary ladda-button" data-style="zoom-in" type="submit"  name="submit"  value="SAVE CHANGES">
			<input class="btn btn-primary ladda-button" data-style="zoom-in" type="submit"  name="submit"  value="NEXT">
		</center>
	</div>
</form>