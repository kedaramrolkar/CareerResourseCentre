<form action="components/update-profile.php" method="post" enctype="multipart/form-data" id="UploadForm">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
      <li class="active"><a href="#PrimaryInformation" data-toggle="tab">Primary Information</a></li>
      <li><a href="#personal" data-toggle="tab">Personal</a></li>
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
                    <input type="text" class="form-control">
</div>
<div class="form-group float-label-control">
                    <label for="">Email</label> 
                    <input type="text" class="form-control">
                </div> 

                <div class="form-group float-label-control">  
                    <label for="">Current Address</label>
                    <textarea id="txtArea" rows="2" ></textarea>
                &nbsp;&nbsp;&nbsp;
<label for="">Country</label>	
<select>
  <option value="US">US</option>
  <option value="INDIA">INDIA</option>
  <option value="UK">UK</option>
  <option value="CANADA">CANADA</option>
</select>
</div>
			<div class="form-group float-label-control">  
                    <label for="">Gender</label>
                    <input type="radio" name="gender" value="male"> Male
  		    <input type="radio" name="gender" value="female"> Female
                </div>
		
		<div>	
<label for="">Veteran Status</label>	
<select>
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
                    <label for="">Id</label>
                    <input type="text" class="form-control">
		</div>

<div class="form-group float-label-control">
                    <label for="">Ph No</label>
                    <input type="text" class="form-control">
		</div>
<div class="form-group float-label-control">  
                    <label for="">Permanent Address</label>
                    <textarea id="txtArea" rows="2" ></textarea>
&nbsp;&nbsp;&nbsp;
		<label for="">Country</label>	
<select>
  <option value="US">US</option>
  <option value="INDIA">INDIA</option>
  <option value="UK">UK</option>
  <option value="CANADA">CANADA</option>
</select>
                </div>
	
			<div class="form-group float-label-control">	
<label for="">Disability</label>	
<select>
  <option value="no">No. I do not have Disability</option>
  <option value="yes">Yes. I have a Disability</option>
  <option value="disclose">I do not want to disclose</option>
</select>
</div>
<div>	
<label for="">Visa Status</label>	
<select>
  <option value="F1">F1</option>
  <option value="F2">F2</option>
  <option value="G1">G1</option>
  <option value="G2">G2</option>
</select>
</div>                 
            </div>
        </div>
        <div class="tab-pane fade" id="personal">
            <div class="col-md-6">
                <div class="form-group float-label-control">
                    <label for="">Short Bio</label>
                    <textarea class="form-control" placeholder="<?php echo $rws['user_shortbio'];?>" rows="10" placeholder="<?php echo $rws['user_shortbio'];?>" name="user_shortbio" value="<?php echo $rws['user_shortbio'];?>"><?php echo $rws['user_shortbio'];?></textarea>
                </div>
                <div class="form-group float-label-control">
                    <label for="">Birthday</label>   
                    <input type="date" class="form-control" placeholder="<?php echo $rws['user_dob'];?>" name="user_dob" value="<?php echo $rws['user_dob'];?>">      
                </div>
                <div class="form-group float-label-control">
                    <label for="">Profession</label>
                    <input type="text" class="form-control" placeholder="<?php echo $rws['user_profession'];?>" name="user_profession" value="<?php echo $rws['user_profession'];?>" id="profession">    
                </div>  
                <label for="">Gender</label>              
                <div class="form-group float-label-control">
                    <div class="radio-inline">
                        <label>
                            <input type="radio" name="user_gender" id="optionsRadios1" value="Male" checked>Male</label>
                    </div>              
                    <div class="radio-inline">
                        <label>
                            <input type="radio" name="user_gender" id="optionsRadios1" value="Female">Female</label>
                    </div>
                </div>
                <div class="form-group float-label-control">
                    <label for="">Country</label>
                    <input type="text" class="form-control" placeholder="<?php echo $rws['user_country'];?>" name="user_country" value="<?php echo $rws['user_country'];?>" id="country">    
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group float-label-control">
                    <label for="">Address</label>
                    <input type="text" class="form-control" placeholder="<?php echo $rws['user_address'];?>" name="user_address" value="<?php echo $rws['user_address'];?>">    
                </div>
                <label for="">Website</label>
                <div class="form-group float-label-control">
                    <div class="input-group">                  
                        <span class="input-group-addon">http://</span>
                        <input type="text" class="form-control" placeholder="<?php echo $rws['user_website'];?>" name="user_website" value="<?php echo $rws['user_website'];?>">                  
                    </div>
                </div> 
            </div>
        </div>
    </div>     
    <br>
    <div class="submit">
        <center>
            <button class="btn btn-primary ladda-button" data-style="zoom-in" type="submit"  id="SubmitButton" value="Upload" />Save Your Profile</button>
        </center>
    </div>
</form>