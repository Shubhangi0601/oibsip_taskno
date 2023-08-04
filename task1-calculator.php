<!DOCTYPE html>
<html>
<head>
  <title>Simple Calculator</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      margin-top: 50px;
    }
    .calculator {
      width: 300px;
      margin: 0 auto;
      border: 1px solid #ccc;
      padding: 10px;
    }
    .calculator input {
      width: 100%;
      margin-bottom: 10px;
      font-size: 18px;
      padding: 5px;
    }
    .calculator button {
      width: 48%;
      padding: 10px;
      margin: 2px;
      font-size: 18px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="calculator">
    <input type="text" id="display" disabled>
    <button onclick="clearDisplay()">C</button>
    <button onclick="appendToDisplay('/')">/</button>
    <button onclick="appendToDisplay('*')">*</button>
    <button onclick="appendToDisplay('7')">7</button>
    <button onclick="appendToDisplay('8')">8</button>
    <button onclick="appendToDisplay('9')">9</button>
    <button onclick="appendToDisplay('-')">-</button>
    <button onclick="appendToDisplay('4')">4</button>
    <button onclick="appendToDisplay('5')">5</button>
    <button onclick="appendToDisplay('6')">6</button>
    <button onclick="appendToDisplay('+')">+</button>
    <button onclick="appendToDisplay('1')">1</button>
    <button onclick="appendToDisplay('2')">2</button>
    <button onclick="appendToDisplay('3')">3</button>
    <button onclick="calculate()">=</button>
    <button onclick="appendToDisplay('0')">0</button>
    <button onclick="appendToDisplay('.')">.</button>
  </div>

  <script>
    let displayValue = '';

    function appendToDisplay(val) {
      displayValue += val;
      document.getElementById('display').value = displayValue;
    }

    function clearDisplay() {
      displayValue = '';
      document.getElementById('display').value = '';
    }

    function calculate() {
      const display = document.getElementById('display');
      try {
        displayValue = eval(displayValue);
        display.value = displayValue;
      } catch (error) {
        display.value = 'Error';
      }
    }
  </script>
</body>
</html>
