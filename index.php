<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<style>
        *{
            padding: 5px;
        }
        #name {
            width: 150px;
            height: 30px;
            margin-left: 110px;

        }
        #club{
            /* width: 150px;
            height: 30px; */
            margin-top: 10px;
        }
        #sub{
            width: 200  px;
            
        }
       
    </style>
  <form  action="result.php" method = "post">
    <div class="name" >
      <label for="email">Name:</label>
      <input type="text" class="" id="Name"  name="name">
    </div>
    <div class="club">
        <label >Club you want to apply:
            <select class="form-select ml-5" aria-label="Default select example" name="club">
                    <option selected>Robotic club</option>
                    <option value="one">One</option>
                    <option value="two">Two</option>
                    <option value="three">Three</option>
            </select>
        </label>
    </div>
    <div class="time" >
        <label > Be time for you: 
            <input type="radio" name="day" value="Satuday mmornings" > Satuday mmornings<br>
            <input type="radio" name="day" value="Satuday afternoons" > Satuday afternoons<br>
            <input type="radio" name="day" value="Sunday afternoons" >Sunday afternoons

        </label>
    </div>
    <div class="skill" >
    <label> Your Skills:</label> 
            <div class="row">    
                <div class="col-2 ">            
                    <input type="checkbox" name="skills[]" value="the best codes"> the best codes<br>
                    <input type="checkbox" name="skills[]" value="a super star"> a super star<br>
                    <input type="checkbox" name="skills[]" value="single"> singer<br>
                    <input type="checkbox" name="skills[]" value="the best eater"> the best eater
                </div>  
                <div class="col-2">
                    <input type="checkbox" name="skills[]" value=""> good in arts<br>
                    <input type="checkbox" name="skills[]" value=" a crazy dance"> a crazy dancer<br>
                    <input type="checkbox" name="skills[]" value="good in design"> good in design<br>
                    <input type="checkbox" name="skills[]" value="good in speeches"> good in speeches
                </div>
            </div>
    </div>
    <div class="sub">
        <button type="submit" >Submit</button>
    </div>
    
  </form>

    
</body>
</html>