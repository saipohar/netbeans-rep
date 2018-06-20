<html>
    <head>
        <title>data table</title>
        <script src="jquery-latest.js"></script>
        <script src="jquery.tablesorter.js"></script>
    </head>
    <body>
        <div class="data-tables">
            <table>
                <thead>
                    <tr>
                        <th>s.no</th>
                        <th>name</th>
                        <th>number</th>
                        <th>email</th>
                    </tr>
                </thead>
                
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>saikumar</td>
                        <td>979797977</td>
                        <td>saikumar@gmail.com</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>rajkumar</td>
                        <td>7898789887</td>
                        <td>rajkumar@gmail.com</td>
                    </tr>
                                    </tbody>
            </table>
        </div>
    </body>
</html>

<style>
    table, tr, tbody, thead, th, td{
        border: 1px solid #cccccc;
        padding: 5px 10px;
        text-align: center;
    }
</style>

<script>
    $(document).ready(function () {
        // call the tablesorter plugin, the magic happens in the markup
        $("table").tablesorter();
    });
</script>