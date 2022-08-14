<div class="modal">
  <div id="success-icon">
    <div></div>
  </div>
  <svg id="close-modal" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 10 10">
    <line x1="1" y1="-1" x2="9" y2="11" stroke-width="2.5" />
    <line x1="9" y1="-1" x2="1" y2="11" stroke-width="2.5" />
  </svg>
  <h1><strong>Success!</strong></h1>
  <svg class="progress" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 100 4.5">
    <rect height="4.5" width="100" rx="2" ry="2" />
  </svg>
  
  <hr>
  <p class="message">Your order is successfully placed!</p>
</div>

<div class="container">
<a href="./index.php"><button class="accept">Continue Shopping</button></a>
</div>

<style>
* {
  margin: 0;
}

body {
  background-color: #d5ddde;
  color: #575a5b;
  font-family: "Open Sans", Helvetica, Arial, sans-serif;
}

.modal {
  position: relative;
  background-color: #fff;
  box-sizing: border-box;
  width: 90%;
  max-width: 460px;
  margin: 0 auto;
  margin-top: 100px;
  border-radius: 4px;
  padding: 105px 38px 20px 38px;
  text-align: center;
  box-shadow: 0px 1px 5px 0px rgba(0, 0, 0, 0.25);
}

h1 {
  font-size: 37px;
}

.points {
  color: #a2b5b9;
  font-size: 18px;
}

hr {
  border: none;
  height: 1px;
  background-color: #dddddd;
  margin: 20px auto;
}

.progress {
  margin-top: 20px;
  margin-bottom: 27px;
}
.progress rect {
  fill: #59bc69;
}

#close-modal {
  position: absolute;
  top: 12px;
  right: 12px;
  width: 11px;
  height: 11px;
  stroke: #575a5b;
  cursor: pointer;
}

#success-icon {
  position: absolute;
  width: 110px;
  height: 110px;
  left: 50%;
  margin-left: -55px;
  top: -5%;
  background-color: #59bc69;
  border-radius: 50%;
  box-sizing: border-box;
  border: solid 5px white;
  box-shadow: 0px 2px 3px 0px rgba(0, 0, 0, 0.3);
}
#success-icon div {
  position: absolute;
  top: 34%;
  left: 26%;
  transform: rotate(-45deg);
  border-bottom: solid 0.8em white;
  border-left: solid 0.8em white;
  height: 15%;
  width: 33%;
}

.container {
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  min-height: 10vh;
}
.container .accept {
  background-color: #5cb85c;
  border-radius: 10px;
  border-style: none;
  box-shadow: none;
  box-sizing: border-box;
  color: #fff;
  font-size: 15px;
  font-weight: 500;
  height: 50px;
  letter-spacing: normal;
  line-height: 1.5;
  outline: none;
  overflow: hidden;
  padding: 14px 30px;
  transition: all 0.3s;
  margin: 10px;
}
.container .accept:hover {
  background-color: #7ed37e;
  opacity: 1;
  transform: translateY(0);
  transition-duration: 0.35s;
}
</style>