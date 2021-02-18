<html>
<head>
    <title>B180910046 lab2</title>
    <meta charset="utf-8">

    <!-- bootstrap san gaa duudaj bn  -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <br>
    <div class="container">
        <!-- moriin heseg  -->
        <div class="row">
            <div class="col-sm-6">
                <h3>Утга хөрвүүлэх</h3>
            </div>
            <div class="col-sm-6">  
                <button class="btn btn-primary">
                    <span></span><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
                        <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                        <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
                    </svg></span> Бүх лабораторын ажил
                </button>
            </div>
        </div>
        <!-- form iin heseg  -->
        <form action="index.php" method="POST">    
            <!-- huwisagch ehend ee utgaguui bh bogood aldaaanii message iig hide hiiij bn  -->
            <?php
                error_reporting(0);
                $myUnit = $_POST['myUnit'];
                $myValue = $_POST['myValue'];
            ?>
            <div class="row">
                <div class="col-sm-6">
                    <!-- utga awah heseg  -->
                    <label>Хувиргах утга:</label>
                    <input type="text" name="myUnit" class="form-control" value="<?php echo $myUnit;?>">
                    <br>
                </div>
                <div class="col-sm-6">
                    <!-- huwirgah torol awah heseg  -->
                    <label>Хувиргах төрөл</label>
                    <?php echo $myValue; ?>
                    <select name="myValue" class="form-control" value="3">
                        <!-- bagahan nohtsolt uildeer utgaa oor deeree hadgalj bn  -->
                        <option value="1" <?php echo ($myValue == '1') ? 'selected': ''; ?>>Инч-см</option>
                        <option value="2" <?php echo ($myValue == '2') ? 'selected': ''; ?>>Бээр-км</option>
                        <option value="3" <?php echo ($myValue == '3') ? 'selected': ''; ?>>Паунд-грамм</option>
                        <option value="4" <?php echo ($myValue == '4') ? 'selected': ''; ?>>Морины хүч-ватт</option>
                        <option value="5" <?php echo ($myValue == '5') ? 'selected': ''; ?>>Баррел-литр</option>
                    </select>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-6">
                    <label>Үр дүн:</label>
                    <?php
                    // gol tootsoloh uildel ee hiij $result huwisagchid haruig hadgalj bn 
                        if(isset($myUnit) && isset($myValue)){
                            if(intval($myUnit) == 0){
                                // Herew hooson ogogdol oruulsan bol ehnii huudasiih ahin duudna 
                                header("Location: index.php");
                                exit;
                            }else if($myValue == 1){
                                $result = $myUnit * 2.54;
                            }else if($myValue == 2){
                                $result = $myUnit * 1.6;
                            }else if($myValue == 3){
                                $result = $myUnit * 453.59237;
                            }else if($myValue == 4){
                                $result = $myUnit * 745.699872;
                            }else if($myValue == 5){
                                $result = $myUnit * 119.240471;
                            }
                        }
                    ?> 
                    <!-- hariugaa end php code ashiglan hewlej bn  -->
                    <input type="text" class="form-control" value="<?php echo $result;?>" readonly>
                    <!-- readonly gedeg ni zowhon unshih utga awna -->
                </div>
            </div>
            <div class="row mt-4">
            <!-- Buttun heseg  -->
                <div class="col-sm-12">
                    <input type="submit" value="Хувиргах" class="btn btn-primary">
                    <input type="reset" value="Цуцлах" class="btn btn-secondary">
                </div>
            </div>
            <?php
                echo $_SERVER['SERVER_ADDR']."<br>"; 
                echo $_SERVER['SERVER_NAME']."<br>"; 
                echo $_SERVER['SERVER_SOFTWARE']."<br>"; 
                echo $_SERVER['REQUEST_METHOD']."<br>"; 
                echo $_SERVER["HTTP_REFERER"]."<br>"; 
                echo $_SERVER['HTTP_USER_AGENT']."<br>"; 
            ?>
        </form>
    </div>
</body>
</html>