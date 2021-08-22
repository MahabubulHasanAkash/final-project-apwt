import Creator from './Creator';
import Navbar from '../include/AdminNav';
import Footer from '../include/Footer';
import AdminSideBar from '../include/AdminSideBar';
import React, { useState, useEffect } from "react";
import { withStyles, makeStyles, useTheme } from '@material-ui/core/styles';
import Table from '@material-ui/core/Table';
import TableBody from '@material-ui/core/TableBody';
import TableCell from '@material-ui/core/TableCell';
import TableContainer from '@material-ui/core/TableContainer';
import TableHead from '@material-ui/core/TableHead';
import TableRow from '@material-ui/core/TableRow';
import PeopleIcon from '@material-ui/icons/People';
import Grid from '@material-ui/core/Grid';
import Paper from '@material-ui/core/Paper';
import Box from '@material-ui/core/Box';
import { useFetch } from '../collector/useFetch';
import Divider from '@material-ui/core/Divider';
import Button from '@material-ui/core/Button';

const drawerWidth = 340;

const useStyles = makeStyles((theme) => ({
  root: {
    display: 'flex',
    
    backgroundColor: theme.palette.text.disabled,
    
  },
  drawer: {
    [theme.breakpoints.up('sm')]: {
      width: drawerWidth,
      flexShrink: 0,
    },
  },
  appBar: {
    [theme.breakpoints.up('sm')]: {
      width: `calc(100% - ${drawerWidth}px)`,
      marginLeft: drawerWidth,
    },
  },
  menuButton: {
    marginRight: theme.spacing(2),
    [theme.breakpoints.up('sm')]: {
      display: 'none',
    },
  },
  // necessary for content to be below app bar
  toolbar: theme.mixins.toolbar,
  drawerPaper: {
    width: drawerWidth,
  },
  content: {
    flexGrow: 1,
    padding: theme.spacing(1),
  },
  paper: {
    padding: theme.spacing(2),
    textAlign: 'center',
    color: theme.palette.text.secondary,
    
  },
  paper2: {
    padding: theme.spacing(2),
    textAlign: 'center',
    
    width: 1000,
    
  },
}));
const StyledTableCell = withStyles((theme) => ({
  head: {
    backgroundColor: theme.palette.common.black,
    color: theme.palette.common.white,
  },
  body: {
    fontSize: 14,
  },
}))(TableCell);

const StyledTableRow = withStyles((theme) => ({
  root: {
    '&:nth-of-type(odd)': {
      backgroundColor: theme.palette.action.hover,
    },
  },
}))(TableRow);

const Creators = ()=>{

  const url_viewCreator = `http://localhost:8000/api/admin/viewCreator`;
  const [CreatorList, setCreatorList] = useState([]);
  useFetch(url_viewCreator, setCreatorList);

    const classes = useStyles();
    return(
        <>
        
        <Navbar/>
                <div className={classes.root}>
                <Grid container spacing={3}>
            <Grid item xs={12} sm={12}>
              
          <Paper className={classes.paper}>
        
        <AdminSideBar/>
        </Paper>
        </Grid>
        
      </Grid>
        
        <Grid container spacing={3}>
            <Grid item xs={12} sm={12}>
              
          <Paper className={classes.paper2}>
            
      <main className={classes.content}>
      <Divider/><Divider/><Divider/><Divider/><Divider/><Divider/><Divider/><Divider/><Divider/><Divider/><Divider/><Divider/><Divider/><Divider/><Divider/><Divider/><Divider/><Divider/><Divider/><Divider/><Divider/><Divider/><Divider/><Divider/><Divider/><Divider/><Divider/><Divider/><Divider/><Divider/><Divider/><Divider/><Divider/><Divider/><Divider/><Divider/><Divider/><Divider/>
        <h3 align="left"><PeopleIcon/>View Creator</h3>

        <div className={classes.toolbar} />
        <TableContainer component={Paper}>
      <Table className={classes.table} aria-label="customized table">
        <TableHead>
          <TableRow>
            <StyledTableCell align="center">Name</StyledTableCell>
            <StyledTableCell align="center">Email</StyledTableCell>
            <StyledTableCell align="center">Action</StyledTableCell>
            
          </TableRow>
        </TableHead>
        <TableBody>
        {CreatorList.map((u) => (
            <StyledTableRow key={CreatorList.name}>
              <StyledTableCell align="center" component="th" scope="row">
                
              {CreatorList.map((u)=>{
                        return(
                          <>
                          {u.name}
                          </>
                        );
                    })}
              </StyledTableCell>
              <StyledTableCell align="center" component="th" scope="row">
                
              {CreatorList.map((u)=>{
                        return(
                          <>
                          {u.email}
                          </>
                        );
                    })}
              </StyledTableCell>

              <StyledTableCell align="center" component="th" scope="row">
                
              
              <Button color="secondary" href="">Delete</Button>
            
          
              </StyledTableCell>
              
              
            </StyledTableRow>
          ))}
            
        </TableBody>
      </Table>
    </TableContainer>
        
      </main>
      </Paper>
            </Grid>
          </Grid>
      </div>
                <Footer/>
        
        </>
    );
}

export default Creators;