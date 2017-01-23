<?php
$txtName=$_POST["txtName"];$txtName = str_replace("'", '&#39;', $txtName);
if (isset($_POST['txtName'])&&!empty($_POST["txtName"])) {
	$txtName=$_POST["txtName"];$txtName = str_replace("'", '&#39;', $txtName);
}
$txtEmail=$_POST["txtEmail"];$txtEmail = str_replace("'", '&#39;', $txtEmail);
if (isset($_POST['txtEmail'])&&!empty($_POST["txtEmail"])) {
	$txtEmail=$_POST["txtEmail"];$txtEmail = str_replace("'", '&#39;', $txtEmail);
}
$txtPhone=$_POST["txtPhone"];$txtPhone = str_replace("'", '&#39;', $txtPhone);
if (isset($_POST['txtPhone'])&&!empty($_POST["txtPhone"])) {
	$txtPhone=$_POST["txtPhone"];$txtPhone = str_replace("'", '&#39;', $txtPhone);
}
$txtMessage=$_POST["txtMessage"];$txtMessage = str_replace("'", '&#39;', $txtMessage);
if (isset($_POST['txtMessage'])&&!empty($_POST["txtMessage"])) {
	$txtMessage=$_POST["txtMessage"];$txtMessage = str_replace("'", '&#39;', $txtMessage);
}
$txtTitle=$_POST["txtTitle"];$txtTitle = str_replace("'", '&#39;', $txtTitle);
if (isset($_POST['txtTitle'])&&!empty($_POST["txtTitle"])) {
	$txtTitle=$_POST["txtTitle"];$txtTitle = str_replace("'", '&#39;', $txtTitle);
}
$txtProduct=$_POST["txtProduct"];$txtProduct = str_replace("'", '&#39;', $txtProduct);
if (isset($_POST['txtProduct'])&&!empty($_POST["txtProduct"])) {
	$txtProduct=$_POST["txtProduct"];$txtProduct = str_replace("'", '&#39;', $txtProduct);
}

$getToken=getToken($token);
if($getToken==true){
    $inputToken=inputToken($token);
    if($inputToken==true){
        
        $result=mysqli_query($con, "INSERT INTO db_enquiry 
            (enquiry_date, enquiry_time, enquiry_name, enquiry_phone, enquiry_email, enquiry_title, enquiry_contents, enquiry_token) 
            VALUES 
            ('$Today', '$Time', '$txtName', '$txtPhone', '$txtEmail', '$txtTitle', '$txtMessage', '$token')");
        $newInsertID=mysqli_insert_id($con);
        if($newInsertID>0){
            $systemSucces="Data added.";
            $currentURl="/products/".$txtProduct;
        }else{
            $systemError="Invalid Token (Query-1)";
            $currentURl="/products/".$txtProduct;
        }
    }else{
        $systemError="Invalid Token (Insert)";
    }   
}else{
    $systemError="Invalid Token (Query-2)";
}

$title="Thanks for enquiry WWW.VLKEN.COM";
$body='
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"> <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn&apos;t be necessary -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name=”x-apple-disable-message-reformatting”>  <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->

    <!-- Web Font / @font-face : BEGIN -->
    <!-- NOTE: If web fonts are not required, lines 9 - 26 can be safely removed. -->
    
    <!-- Desktop Outlook chokes on web font references and defaults to Times New Roman, so we force a safe fallback font. -->
    <!--[if mso]>
        <style>
            * {
                font-family: sans-serif !important;
            }
        </style>
    <![endif]-->
    
    <!-- All other clients get the webfont reference; some will render the font and others will silently fail to the fallbacks. More on that here: http://stylecampaign.com/blog/2015/02/webfont-support-in-email/ -->
    <!--[if !mso]><!-->
        <!-- insert web font reference, eg: <link href=&apos;https://fonts.googleapis.com/css?family=Roboto:400,700&apos; rel=&apos;stylesheet&apos; type=&apos;text/css&apos;> -->
    <!--<![endif]-->

    <!-- Web Font / @font-face : END -->
    
    <!-- CSS Reset -->
    <style>

        /* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
        }
        
        /* What it does: Stops email clients resizing small text. */
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }
        
        /* What it does: Centers email on Android 4.4 */
        div[style*="margin: 16px 0"] {
            margin:0 !important;
        }
        
        /* What it does: Stops Outlook from adding extra spacing to tables. */
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }
                
        /* What it does: Fixes webkit padding issue. Fix for Yahoo mail table alignment bug. Applies table-layout to the first 2 tables then removes for anything nested deeper. */
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }
        table table table {
            table-layout: auto; 
        }
        
        /* What it does: Uses a better rendering method when resizing images in IE. */
        img {
            -ms-interpolation-mode:bicubic;
        }
        
        /* What it does: A work-around for iOS meddling in triggered links. */
        .mobile-link--footer a,
        a[x-apple-data-detectors] {
            color:inherit !important;
            text-decoration: underline !important;
        }
      
    </style>
    
    <!-- Progressive Enhancements -->
    <style>
        
        /* What it does: Hover styles for buttons */
        .button-td,
        .button-a {
            transition: all 100ms ease-in;
        }
        .button-td:hover,
        .button-a:hover {
            background: #555555 !important;
            border-color: #555555 !important;
        }

        /* Media Queries */
        @media screen and (max-width: 480px) {

            /* What it does: Forces elements to resize to the full width of their container. Useful for resizing images beyond their max-width. */
            .fluid,
            .fluid-centered {
                width: 100% !important;
                max-width: 100% !important;
                height: auto !important;
                margin-left: auto !important;
                margin-right: auto !important;
            }
            /* And center justify these ones. */
            .fluid-centered {
                margin-left: auto !important;
                margin-right: auto !important;
            }

            /* What it does: Forces table cells into full-width rows. */
            .stack-column,
            .stack-column-center {
                display: block !important;
                width: 100% !important;
                max-width: 100% !important;
                direction: ltr !important;
            }
            /* And center justify these ones. */
            .stack-column-center {
                text-align: center !important;
            }
        
            /* What it does: Generic utility class for centering. Useful for images, buttons, and nested tables. */
            .center-on-narrow {
                text-align: center !important;
                display: block !important;
                margin-left: auto !important;
                margin-right: auto !important;
                float: none !important;
            }
            table.center-on-narrow {
                display: inline-block !important;
            }
                
        }

    </style>

</head>
<body width="100%" bgcolor="#222222" style="margin: 0;">
    '.$emailBodyTemplate.'
</body>
</html>
';
$result=sendEmail($title, $txtEmail, $body, "noredirect");
?>