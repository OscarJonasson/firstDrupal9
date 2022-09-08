import React, { useState } from "react";
import Circle from "./components/Circle/Circle";
// import "./main.css";

const App = () => {
  const [number, setNumber] = useState(0);

  const up = () => {
    setNumber(number + 1);
  };
  return (
    <>
      <h1 className="dasdf">HULABALOO</h1>
      <p>{number}</p>
      <button onClick={up}>+1</button>
      <Circle />
    </>
  );
};

export default App;
