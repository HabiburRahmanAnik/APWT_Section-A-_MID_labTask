<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product</title>
</head>
<body>
    <form method="POST">
        {{ csrf_field() }}
        <table>
            <tr>
                <td><label>Product Name</label></td>
                <td><input type="text" name="product_name"></td>
            </tr>
            <tr>
                <td><label>Category</label></td>
                <td><input type="text" name="catagory"></td>
            </tr>
            <tr>
                <td><label>Unit Price</label></td>
                <td><input type="text" name="price"></td>
            </tr>
            <tr>
                <td><label>status</label></td>
                <td>
                    <select name="status">
                        <option value="upcoming">upcoming</option>
                        <option value="existing">existing</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label>Vendor Name</label></td>
                <td>
                    <select name="vendorId">
                    
                    </select>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>