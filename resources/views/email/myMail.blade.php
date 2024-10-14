<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
</head>
<body>

<table style="border: black 2px solid; width: 100%">
    <tr style="border: black 2px solid;">
        <td style="border: black 2px solid;">First Name</td>
        <td style="border: black 2px solid;">
            {!! $details['data']->f_name !!}

        </td>
    </tr> <tr style="border: black 2px solid;">
    <tr style="border: black 2px solid;">
        <td style="border: black 2px solid;">Last Name</td>
        <td style="border: black 2px solid;">
            {!! $details['data']->l_name !!}

        </td>
    </tr> <tr style="border: black 2px solid;">
        <td style="border: black 2px solid;">Email</td>
        <td style="border: black 2px solid;">
            {!! $details['data']->email !!}

        </td>
    </tr>
    <tr style="border: black 2px solid;">
        <td style="border: black 2px solid;">Tittle</td>
        <td style="border: black 2px solid;">
            {!! $details['data']->tittle !!}

        </td>
    </tr>
    <tr style="border: black 2px solid;">
        <td style="border: black 2px solid;">Mobile</td>
        <td style="border: black 2px solid;">
            {!! $details['data']->mobile !!}

        </td>
    </tr>
    <tr>
        <td style="border: black 2px solid;">Message</td>
        <td style="border: black 2px solid;">
            {!! $details['data']->message !!}

        </td>
    </tr>

</table>
</body>
</html>
