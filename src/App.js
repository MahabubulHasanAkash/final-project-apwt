import React from 'react';
import Product from './components/Product';
import Sales from './components/Sales'
import Inventory from './components/Inventory';
import Breakdown from './components/Breakdown';
import SalesReport from './components/SalesReport';
import MemberList from './components/MembersList';
import CreateMenber from './components/CreateMember';
import { v4 as uuidv4 } from 'uuid';
import './App.css';

import {
  BrowserRouter as Router,
  Switch,
  Route,
  Link, Redirect
} from "react-router-dom";
import Demand from './components/Demand';
import Comprtitor from './components/Competitor';

class App extends React.Component {

  componentDidMount() {
    <Redirect to="/analitycs/product" />;
  }

  render() {
    const linkTarget = {
      pathname: "/analitycs/members/list",
      key: uuidv4(), // we could use Math.random, but that's not guaranteed unique.
      state: {
        applied: true
      }
    };
    return (
      <>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand mr-auto" href="#">NFTPlace</a>

            <a href="/analitycs/logout" class="btn btn-outline-warning text-black">Logout</a>
          </div>
        </nav>
        <Router>
          <div class="row pl-3 pr-3">
            <div class="col-md-2 side-bar">
              <div class="row">
                <img id="profile_image" src={`${process.env.PUBLIC_URL}/logo192.png`} alt="sss"></img>
              </div>
              <div class="row justify-content-center">
                <label class="">Name</label>
              </div>
              <div class="row justify-content-center">
                <label class="">Email</label>
              </div>
              <hr></hr>
              <div class="nav flex-column nav-pills" aria-orientation="vertical">
                <div>
                  <div class="p-2 bg-dark text-white">Information</div>

                  <Link className="NavBar" to="/analitycs/product">Product</Link>

                  <Link className="NavBar" to="/analitycs/sales">Sales</Link>
                  <Link className="NavBar" to="/analitycs/inventory">Inventory</Link>
                  <Link className="NavBar" to="/analitycs/demands">Demand</Link>


                  {/* <div class="p-2 bg-dark text-white">Outliner</div> */}
                  {/* <Link class="link" href="/analitycs/contact">Tag Outliner</Link> */}

                  <div class="p-2 bg-dark text-white">Compare</div>
                  <Link className="NavBar" to="/analitycs/competitor">Compare with Competitor</Link>

                  <div class="p-2 bg-dark text-white">Report</div>
                  <Link className="NavBar" to="/analitycs/breakdown">Product Breakdown</Link>
                  <Link className="NavBar" to="/analitycs/sales_report">Sales</Link>

                  <div class="p-2 bg-dark text-white">General</div>
                  <Link className="NavBar" to={linkTarget}>Members</Link>
                  <Link className="NavBar" to="/analitycs/members/create">Add Members</Link>
                  <Link className="NavBar" to="/analitycs/contact">Connect with admin</Link>
                </div>
              </div>
            </div>
            <div class="col-md-10 main-content">
              <div class="container">
                <Switch>
                  <Route exact path="/" >
                    <Product />
                  </Route>
                  <Route path="/analitycs/product">
                    <Product />
                  </Route>
                  <Route path="/analitycs/sales">
                    <Sales />
                  </Route>
                  <Route path="/analitycs/inventory">
                    <Inventory />
                  </Route>
                  <Route path="/analitycs/demands">
                    <Demand />
                  </Route>
                  <Route path="/analitycs/competitor">
                    <Comprtitor />
                  </Route>
                  <Route path="/analitycs/breakdown">
                    <Breakdown />
                  </Route>
                  <Route path="/analitycs/sales_report">
                    <SalesReport />
                  </Route>
                  <Route path="/analitycs/members/list">
                    <MemberList />
                  </Route>
                  <Route path="/analitycs/members/create">
                    <CreateMenber />
                  </Route>
                  <Route path="/analitycs/contact">
                    <Comprtitor />
                  </Route>
                </Switch>
              </div>
            </div>
          </div>
        </Router>


      </>
    );
  }
}

export default App;
