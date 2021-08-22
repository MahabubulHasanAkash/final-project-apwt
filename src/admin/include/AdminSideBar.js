import React from 'react';

import PropTypes from 'prop-types';
import AppBar from '@material-ui/core/AppBar';
import CssBaseline from '@material-ui/core/CssBaseline';
import Divider from '@material-ui/core/Divider';
import Drawer from '@material-ui/core/Drawer';
import Hidden from '@material-ui/core/Hidden';
import IconButton from '@material-ui/core/IconButton';
import InboxIcon from '@material-ui/icons/MoveToInbox';
import List from '@material-ui/core/List';
import ListItem from '@material-ui/core/ListItem';
import ListItemIcon from '@material-ui/core/ListItemIcon';
import ListItemText from '@material-ui/core/ListItemText';
import MailIcon from '@material-ui/icons/Mail';
import MenuIcon from '@material-ui/icons/Menu';
import Toolbar from '@material-ui/core/Toolbar';
import Typography from '@material-ui/core/Typography';
import Button from '@material-ui/core/Button';
import { makeStyles, useTheme } from '@material-ui/core/styles';
import AccountCircleIcon from '@material-ui/icons/AccountCircle';
import EditIcon from '@material-ui/icons/Edit';
import SupervisorAccountIcon from '@material-ui/icons/SupervisorAccount';
import NotificationsActiveIcon from '@material-ui/icons/NotificationsActive';
import SettingsIcon from '@material-ui/icons/Settings';
import BusinessCenterIcon from '@material-ui/icons/BusinessCenter';
import PhoneIcon from '@material-ui/icons/Phone';
import AddIcon from '@material-ui/icons/Add';


const drawerWidth = 240;
const useStyles = makeStyles((theme) => ({
    root: {
      display: 'flex',
      
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
      width: 50,
    },
    
  }));

export default function AdminSideBar() {
    const classes = useStyles();
    return (
    <div>
      <div className={classes.toolbar} />
      
      <Divider />
      <img  width="100" height="100" src={`/${sessionStorage.getItem("profileImage")}`}/>
        <List>
        <ListItem ><BusinessCenterIcon color="primary"/>
            <ListItemText primary={sessionStorage.getItem("usertype")} />
        </ListItem>
    </List>
    <List>
        <ListItem ><AccountCircleIcon color="primary"/>
            <ListItemText primary={sessionStorage.getItem("name")} />
        </ListItem>
    </List>
    <List>
        <ListItem ><MailIcon color="primary"/>
            <ListItemText primary={sessionStorage.getItem("useremail")} />
        </ListItem>
    </List>
    <List>
        <ListItem ><PhoneIcon color="primary"/>
            <ListItemText primary={sessionStorage.getItem("phone")} />
        </ListItem>
    </List>
      <Divider />
      <List>
        <ListItem button component="a" href="/admin/editProfile"><EditIcon/>
            <ListItemText primary=" Edit Profile" />
        </ListItem>
    </List>
    <List>
        <ListItem button component="a" href="/admin/addDataAnalyst"><AddIcon/>
            <ListItemText primary=" Add Data Analyst" />
        </ListItem>
    </List>
    <List>
        <ListItem button component="a" href="/admin/adminPanel"><SupervisorAccountIcon/>
            <ListItemText primary=" Admin Panel" />
        </ListItem>
    </List>
    <List>
        <ListItem button component="a" href="/admin/announcement"><NotificationsActiveIcon/>
            <ListItemText primary=" Announcement" />
        </ListItem>
    </List>
    <List>
        <ListItem button component="a" href="/admin/terms"><SettingsIcon/>
            <ListItemText primary=" Terms & Condition" />
        </ListItem>
    </List>
    </div>
  );
        }