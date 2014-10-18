<?php

class ContactBox
{
    public static function email_me() {
        echo '
        <table>
            <tr>
                <td><strong>Email Me:</strong></td>
                <td align="right"><a href="mailto:info@jollymagic.com">info@jollymagic.com</a></td>
            </tr>
        </table>
        ';
    }

    public static function call_me() {
        echo '
        <table>
            <tr>
                <td><strong>Call me:</strong></td>
                <td align="right">01772 336167</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td align="right">07971 043376</td>
            </tr>
        </table >
        ';
    }

    public static function write_to_me() {
        echo '
        <table>
            <tr>
                <td><strong>Write to me:</strong></td>
                <td align="right"><strong class="textTitle">ACE</strong><strong>ntertainments</strong></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td align="right"><span class="style15">15</span> Osborne Road</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td align="right"><span class="style15">Walton</span>-Le-Dale</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td align="right"><span class="style15">Preston</span></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td align="right"><span class="style15">PR5</span> 4GL</td>
            </tr>
        </table>
        ';
    }

    public static function share_me() {
        echo '
        <table>
            <tr>
                <td><strong>Share me:</strong></td>
                <td align="right"><a href="mailto:?subject=ACEntertainments&body=I%20have%20been%20looking%20http://www.JollyMagic.co.uk%20and%20think%20you%20should%20have%20a%20look%20at%20it."><img src="'.IMAGES.'home/Email2AFriend.gif"></a></td>
            </tr>
        </table>
        ';
    }
}
