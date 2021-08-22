import Term from './Terms';
import React, { useState, useEffect } from "react";
import Navbar from '../include/AdminNav';
import Footer from '../include/Footer';
import AdminSideBar from '../include/AdminSideBar';
import Button from '@material-ui/core/Button';
import { withStyles, makeStyles, useTheme } from '@material-ui/core/styles';
import Grid from '@material-ui/core/Grid';
import Paper from '@material-ui/core/Paper';
import SettingsIcon from '@material-ui/icons/Settings';
import Divider from '@material-ui/core/Divider';

import Table from '@material-ui/core/Table';
import TableBody from '@material-ui/core/TableBody';
import TableCell from '@material-ui/core/TableCell';
import TableContainer from '@material-ui/core/TableContainer';
import TableHead from '@material-ui/core/TableHead';
import TableRow from '@material-ui/core/TableRow';

import TextField from '@material-ui/core/TextField';
import { useFetch } from '../collector/useFetch';


const drawerWidth = 340;

const useStyles = makeStyles((theme) => ({
  root: {
    display: 'flex',
    backgroundColor: theme.palette.text.disabled,
  },
  inputRoot: {
    '& > *': {
      margin: theme.spacing(1),
      width: '100ch',
      innerHeight:'10ch',
    },
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
  submit: {
    margin: theme.spacing(3, 0, 2),
    width: '10ch',
    position: 'right',
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
  table: {
    minWidth: 700,
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

const Terms = ()=>{

  const url_Terms = `http://localhost:8000/api/admin/terms`;
  const [TermsList, setTermsList] = useState([]);
  useFetch(url_Terms, setTermsList);

    const classes = useStyles();
    useEffect(() => {
      document.title = "Terms & Conditions";
    }, []);
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
        <h3 align="left"><SettingsIcon/> Terms & Condition</h3>
      
        <div className={classes.toolbar} />
        <form className={classes.inputRoot} noValidate autoComplete="off">
      
      <TextField id="outlined-basic" label="Terms & condition" variant="outlined" value="" />
      <Button type="submit" variant="contained"color="primary"className={classes.submit}>Update</Button>
    </form><br/><br/>
        <TableContainer component={Paper}>
      <Table className={classes.table} aria-label="customized table">
        <TableHead>
          <TableRow>
            <StyledTableCell align="center">Terms</StyledTableCell>
            
            
          </TableRow>
        </TableHead>
        <TableBody>
        {TermsList.map((u) => (
            <StyledTableRow key={TermsList.terms}>
              <StyledTableCell align="center" component="th" scope="row">
                
              {TermsList.map((u)=>{
                        return(
                          <>
                          {u.terms}
                          </>
                        );
                    })}
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

export default Terms;