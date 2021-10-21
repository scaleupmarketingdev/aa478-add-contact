# aa478-add-contact
<p align="center">
<img src="https://gedlynk.com/wp-content/uploads/2015/11/Infusionsoft-Logo-EPS-vector-image-2.png" style="width:35%;"/>
</p>

<h3>For more info about the infusionsoft syntax Click <a href="https://developer.infusionsoft.com/docs/xml-rpc/#contact">here</a></h3>
<h4>Current URL: https://scaleupmarketing.asia/httpscripts/aa478/note/add_contact.php</h4>
<p>Script Description: 
When HTTP POST REQUEST is triggered through the asiaconference website<br>
carrying the variables newcontactname,newcontactemail,newcontactjob,company,tagID,SearchTag,eventabbrevation & eventname.<br>

The script is fired when creating a new contact on the asia pacific conference website.<br>
The first function of the script is to check if the contact exist by scanning the infusionsoft system using the email.<br>
<strong>IF the contact exists:<br></strong>
It will update the contact information with the variables that we passed earlier to make sure that the info on the contact is accurate and apply the tag using the "tagid" that we passed a while ago..<br>
<strong>ELSE IF the contact dont exists:</strong><br>
It will create the contact and apply the tag to the contact.
</p>
