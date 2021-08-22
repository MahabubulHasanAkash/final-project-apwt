import React from 'react';
import { makeStyles } from '@material-ui/core/styles';
import AppBar from '@material-ui/core/AppBar';
import Toolbar from '@material-ui/core/Toolbar';
import Typography from '@material-ui/core/Typography';
import Button from '@material-ui/core/Button';
import IconButton from '@material-ui/core/IconButton';
import HomeRoundedIcon from '@material-ui/icons/HomeRounded';
import Divider from '@material-ui/core/Divider';
import { useHistory } from "react-router-dom";


const useStyles = makeStyles((theme) => ({
  root: {
    flexGrow: 1,
  },
  menuButton: {
    marginRight: theme.spacing(2),
  },
  title: {
    flexGrow: 1,
  },
}));

export default function Navbar() {
  const history = useHistory();
  const classes = useStyles();
  const [anchorEl, setAnchorEl] = React.useState(null);
  const [mobileMoreAnchorEl, setMobileMoreAnchorEl] = React.useState(null);

  const isMenuOpen = Boolean(anchorEl);
  const isMobileMenuOpen = Boolean(mobileMoreAnchorEl);

  const handleProfileMenuOpen = (event) => {
    setAnchorEl(event.currentTarget);
  };

  const handleMobileMenuClose = () => {
    setMobileMoreAnchorEl(null);
  };

  const handleMenuClose = () => {
    setAnchorEl(null);
    handleMobileMenuClose();
  };

  const handleMobileMenuOpen = (event) => {
    setMobileMoreAnchorEl(event.currentTarget);
  };

  return (
    <div className={classes.root}>
      <AppBar position="fixed" color='primary' style={{ background: 'black' }}>
        <Toolbar>
          <IconButton>
            <HomeRoundedIcon/>
          </IconButton>

          <Typography variant="h6" className={classes.title}>           
          <Button color="inherit" href="nft">NFT's</Button>
          <Button color="inherit" href="/admin/adminHome">DashBoard</Button>
          <Button color="inherit" href="/admin/artType">Art Type</Button>
          <Button color="inherit" href="/admin/viewCollector">Collectors</Button>
          <Button color="inherit" href="/admin/viewCreator">Creators</Button>
          <Button color="inherit" href="/admin/viewDataAnalyst">Data Analyst</Button>
          
          
          </Typography>
          <Button onClick={handleMenuClose} href="/" color="inherit">logout</Button>
        </Toolbar>
      </AppBar>
    </div>
  );
}
