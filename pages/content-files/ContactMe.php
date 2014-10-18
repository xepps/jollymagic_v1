<form method="post" onsubmit="return validate(this);" class="contact-form">
    <div class="right"></div>
    <div id="contactTable">
        <div class="left">
            <table width="214"  border="0" cellspacing="2" cellpadding="1">
                <tr>
                    <td align="left"><img src="<?= IMAGES ?>booknow/Contact_name.gif"></td>
                </tr>
                <tr>
                    <td><table width="200" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="11"><img src="<?= IMAGES ?>booknow/Contact_Box_Left.gif" width="11" height="21"></td>
                                <td width="178" align="left" valign="middle" class="ContactBoxBak"><input name="Name" type="text" class="button" id="Name" size="30"></td>
                                <td width="11"><img src="<?= IMAGES ?>booknow/Contact_Box_Right.gif" width="11" height="21"></td>
                            </tr>
                        </table></td>
                </tr>
                <tr>
                    <td align="left"><img src="<?= IMAGES ?>booknow/Contact_Phone.gif"></td>
                </tr>
                <tr>
                    <td><table width="200" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="11"><img src="<?= IMAGES ?>booknow/Contact_Box_Left.gif" width="11" height="21"></td>
                                <td width="178" align="left" valign="middle" class="ContactBoxBak"><input name="Phone" type="text" class="button" id="Phone" size="30"></td>
                                <td width="11"><img src="<?= IMAGES ?>booknow/Contact_Box_Right.gif" width="11" height="21"></td>
                            </tr>
                        </table></td>
                </tr>
                <tr>
                    <td align="left"><img src="<?= IMAGES ?>booknow/Contact_Email.gif"></td>
                </tr>
                <tr>
                    <td><table width="200" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="11"><img src="<?= IMAGES ?>booknow/Contact_Box_Left.gif" width="11" height="21"></td>
                                <td width="178" align="left" valign="middle" class="ContactBoxBak"><input name="Email" type="text" class="button" id="Email" size="30"></td>
                                <td width="11"><img src="<?= IMAGES ?>booknow/Contact_Box_Right.gif" width="11" height="21"></td>
                            </tr>
                        </table></td>
                </tr>
                <tr>
                    <td align="left"><img src="<?= IMAGES ?>booknow/Contact_Date.gif"></td>
                </tr>
                <tr>
                    <td><table width="200" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="11"><img src="<?= IMAGES ?>booknow/Contact_Box_Left.gif" width="11" height="21"></td>
                                <td width="178" align="left" valign="middle" class="ContactBoxBak"><input name="Date" type="text" class="button" id="Date" size="30"></td>
                                <td width="11"><img src="<?= IMAGES ?>booknow/Contact_Box_Right.gif" width="11" height="21"></td>
                            </tr>
                        </table></td>
                </tr>
                <tr>
                    <td align="left"><img src="<?= IMAGES ?>booknow/Contact_Type.gif"></td>
                </tr>
                <tr>
                    <td><table width="200" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="11"><img src="<?= IMAGES ?>booknow/Contact_Box_Left.gif" width="11" height="21"></td>
                                <td width="178" align="left" valign="middle" class="ContactBoxBak"><input name="Type" type="text" class="button" id="Type" size="30"></td>
                                <td width="11"><img src="<?= IMAGES ?>booknow/Contact_Box_Right.gif" width="11" height="21"></td>
                            </tr>
                        </table></td>
                </tr>
                <tr>
                    <td align="left"><img src="<?= IMAGES ?>booknow/Contact_Venue.gif"></td>
                </tr>
                <tr>
                    <td><table width="200" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="11"><img src="<?= IMAGES ?>booknow/Contact_Box_Left.gif" width="11" height="21"></td>
                                <td width="178" align="left" valign="middle" class="ContactBoxBak"><input name="Venue" type="text" class="button" id="Venue" size="30"></td>
                                <td width="11"><img src="<?= IMAGES ?>booknow/Contact_Box_Right.gif" width="11" height="21"></td>
                            </tr>
                        </table></td>
                </tr>
                <tr>
                    <td align="left"><img src="<?= IMAGES ?>booknow/Contact_Entertainment.gif"></td>
                </tr>
                <tr>
                    <td><table width="200" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="11"><img src="<?= IMAGES ?>booknow/Contact_Box_Left.gif" width="11" height="21"></td>
                                <td width="178" align="left" valign="middle" class="ContactBoxBak"><input name="Entertainment" type="text" class="button" id="Entertainment" size="30"></td>
                                <td width="11"><img src="<?= IMAGES ?>booknow/Contact_Box_Right.gif" width="11" height="21"></td>
                            </tr>
                        </table></td>
                </tr>
                <tr>
                    <td align="left"><img src="<?= IMAGES ?>booknow/Contact_Guests.gif"></td>
                </tr>
                <tr>
                    <td><table width="200" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="11"><img src="<?= IMAGES ?>booknow/Contact_Box_Left.gif" width="11" height="21"></td>
                                <td width="178" align="left" valign="middle" class="ContactBoxBak"><input name="Guests" type="text" class="button" id="Guests" size="30"></td>
                                <td width="11"><img src="<?= IMAGES ?>booknow/Contact_Box_Right.gif" width="11" height="21"></td>
                            </tr>
                        </table></td>
                </tr>
            </table>
        </div>
        <div class="right">
            <div class="top">
                <?php include_once(SLIDESHOW_VIEW.'feedback/main.php'); ?>
            </div>
            <table width="216" border="0" cellpadding="0" cellspacing="0">
                <tr height="131">
                    <td>
                        <table width="115" height="131" border="0" cellpadding="0" cellspacing="0" class="ContactCardBack">
                            <tr>
                                <td><div align="center">
                                        <textarea name="Text" cols="18" rows="7" class="button" id="Text" scrolling="no">Any other info:</textarea>
                                    </div></td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <input id="Submit" name="Submit" type="image" value="Submit" src="<?= IMAGES ?>booknow/Contact_send.gif" width="100" height="131" alt="Submit" hspace=0 border=0>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</form>
