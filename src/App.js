import "./App.css";
import React from "react";
import ReactDOM from "react-dom";
import { BrowserRouter as Router, Route, Switch } from "react-router-dom";
import Landing_page from "./common/landing_page";
import SignIn from "./common/SignIn";
import SignUp from "./common/SignUp";
import CreatorHome from "./creator/pages/creatorHome";
function App() {
  return (
    <Router>
      <Switch>
        <Route exact path="/">
          <Landing_page></Landing_page>
        </Route>
        <Route exact path="/signin">
          <SignIn></SignIn>
        </Route>
        <Route exact path="/signup">
          <SignUp></SignUp>
        </Route>
        <Route exact path="/creator/home">
          <CreatorHome></CreatorHome>
        </Route>
      </Switch>
    </Router>
  );
}

export default App;
