import "./App.css";
import React from "react";
import ReactDOM from "react-dom";
import { BrowserRouter as Router, Route, Switch } from "react-router-dom";
import Landing_page from "./common/landing_page";
import SignIn from "./common/SignIn";
import SignUp from "./common/SignUp";
import CreatorHome from "./creator/pages/creatorHome";
import AdminHome from "./admin/admin/AdminHome";
import AdminPanel from './admin/admin/AdminList';
import EditProfile from './admin/admin/EditProfile';
import Creators from './admin/creator/CreatorList';
import Collectors from './admin/collector/CollectorList';
import DataAnalysts from './admin/dataAnalyst/DataAnalystList';
import AddDataAnalyst from './admin/dataAnalyst/AddDataAnalyst';
import Terms from './admin/terms/TermsList';
import Announcement from './admin/announcement/AnnouncementList';
import ArtType from './admin/artType/ArtTypeList';


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
        <Route path="/admin/adminHome">
        <AdminHome></AdminHome>
        </Route>
        <Route path="/admin/adminPanel">
        <AdminPanel></AdminPanel>
        </Route>
        <Route path="/admin/editProfile">
        <EditProfile></EditProfile>
        </Route>
        <Route path="/admin/viewCollector">
        <Collectors></Collectors>
        </Route>
        <Route path='/admin/viewCreator'>
        <Creators></Creators>
        </Route>
        <Route path='/admin/viewDataAnalyst'>
        <DataAnalysts></DataAnalysts>
        </Route>
        <Route path='/admin/addDataAnalyst'>
        <AddDataAnalyst></AddDataAnalyst>
        </Route>
        <Route path='/admin/announcement'>
        <Announcement></Announcement>
        </Route>
        <Route path='/admin/terms'>
        <Terms></Terms>
        </Route>
        <Route path='/admin/artType'>
        <ArtType></ArtType>
        </Route>
        <Route path='*'>
              404 not found
          </Route> 
      </Switch>
        
    </Router>
    
  );
}

export default App;
