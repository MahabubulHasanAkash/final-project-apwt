import {Link} from 'react-router-dom';
//import React from 'react';
//import { Button } from '@material-ui/core';
import React from 'react';
import Button from '@material-ui/core/Button';
import Table from '@material-ui/core/Table';
import TableBody from '@material-ui/core/TableBody';
import TableCell from '@material-ui/core/TableCell';
import TableContainer from '@material-ui/core/TableContainer';
import TableHead from '@material-ui/core/TableHead';
import TableRow from '@material-ui/core/TableRow';
import Paper from '@material-ui/core/Paper';
import { withStyles, makeStyles, useTheme } from '@material-ui/core/styles';

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

const Collector = ({id,name,email,password,usertype,profileImage,phone, callback})=>{
    const classes = useStyles();
    return(
        <>
                <TableContainer component={Paper}>
      <Table className={classes.table} aria-label="customized table">
        <TableHead>
          
        </TableHead>
        <TableBody>
        <StyledTableRow>
              <StyledTableCell align="center" component="th" scope="row">
              {name}
              </StyledTableCell>
              <StyledTableCell align="center" component="th" scope="row">
              {email}
              </StyledTableCell>

              <StyledTableCell align="center" component="th" scope="row">
                
              
              <Button onClick={()=>callback(id)} color="secondary" href="">Delete</Button>
              
          
              </StyledTableCell>
              
              
            </StyledTableRow>
              
        </TableBody>
        
      </Table>
    </TableContainer>


        </>
    );
}


export default Collector;