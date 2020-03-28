<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\css\css_admin.css">
    <title>Admin</title>
</head>
<body>
    <header class="header" >
        <div class="container">
            <div class="header_inner">
                <div class="logo"><a>Kalmakov 2020</a></div>
                <nav class="nav">       
                    <a href="#" class="nav_link">Request</a> 
                    <a href="#" class="nav_link">Workers</a> 
                    <a href="#" class="nav_link">Customer</a>
                    <a href="#" class="nav_link">insurance policy</a>
                    <a href="#" class="nav_link">insurance</a>
                </nav>
            </div>
        </div>
    </header>

<div class="container">
    
    
    <div class="create_forma">
        <form class="forma1" method="POST" action="Workers_process.php">  

            <div class="line__forma">
                <label>Имя</label>
                <input type="text"  name="IName"  >
            </div>

            <div class="line__forma">
                <label>Фамилия</label>
                <input type="text"  name="FName"  placeholder="Фамилия">
            </div>

            <div class="line__forma">
                <label>Очество</label>
                <input type="text"  name="OName"  placeholder="Отчество">
            </div>

            <div class="line__forma">
                <label>ИИН</label>
                <input type="text" name="IIN"  placeholder="ИИН">
            </div>

            <div class="line__forma">
                <label>Должность</label>
                <input type="text" name="Position"  placeholder="Должность">
            </div>

            <div class="line__forma">
                <label>Дата рождения</label>
                <input  type="date" name="DOB"  placeholder="Дата рождения">
            </div>

            <div class="line__forma">
                <label>Номер телефона</label>
                <input type="text" name="Phone"  placeholder="Номер телефона">
            </div>

            <input type="hidden" name="Action" value="create">
            <input type="submit" value="Сохранить" class="sub_cre">   
        </form>
    </div>
</div>
        


    <footer>
        <div class="container">
            <div class="footer_inner">
                <div class="logo" ><a>Kalmakov 2020</a></div>
            </div>
        </div>
    </footer>   
</body>
</html>