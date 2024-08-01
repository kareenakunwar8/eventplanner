<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome to Your Event Planner</title>
<style>
  body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
  }
  
  .background-image {
    background-image: url('jewwllarypic/anniversary2.jpg'); /* Replace 'your-background-image.jpg' with the path to your image */
    background-size: cover;
    background-position: center;
    height: 100vh;
    opacity: 0.7	;
    position: relative;
  }
  
  .welcome-content {
    position: absolute;
    top: 50%;
    left:459px;
    text-align: center;
    color: #040303;
	transition: background-color 0.3s;

	animation:  welcome 1s ease;

  }
  @keyframes welcome {
    from {
      opacity: 0;
      transform: translateY(100%);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
</style>
</head>
<body>

<div class="background-image">
  <div class="welcome-content">
    <h1>Welcome<br>ROYAL CANVAS EVENT  </h1>
    <p>Plan and manage your events effortlessly!</p>

  </div>
</div>


<script>
 // JavaScript code to redirect after 2 seconds
 setTimeout(function() {
      window.location.href = "index.php ";
    }, 2000); // 2000 milliseconds = 2 seconds
</script>


</body>
</html>
