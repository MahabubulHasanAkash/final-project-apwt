import React from 'react';
import { makeStyles } from '@material-ui/core/styles';
import AppBar from '@material-ui/core/AppBar';
import Toolbar from '@material-ui/core/Toolbar';
import Typography from '@material-ui/core/Typography';
import Button from '@material-ui/core/Button';
import IconButton from '@material-ui/core/IconButton';
import HomeRoundedIcon from '@material-ui/icons/HomeRounded';
import Container from '@material-ui/core/Container';

export default function Footer() {
    return (
        <AppBar position="static" color="primary" style={{ background: 'black' }}>
          <Container maxWidth="md">
            <Toolbar textAlign="center">
              <Typography variant="body1" color="inherit">
              All rights reserved © 2021
              </Typography>
            </Toolbar>
          </Container>
        </AppBar>
    )
}