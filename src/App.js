import "./App.css";
import React from "react";
import ReactDOM from "react-dom";
import { BrowserRouter as Router, Route, Switch } from "react-router-dom";
import SignIn from "./common/SignIn";
import SignUp from "./common/SignUp";
function App() {
  return (
    <Router>
      <Switch>
        <Route exact path="/signin">
          <SignIn></SignIn>
        </Route>
        <Route exact path="/signup">
          <SignUp></SignUp>
        </Route>
      </Switch>
    </Router>
  );
}

export default App;
