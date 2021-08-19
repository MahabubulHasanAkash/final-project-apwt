import React, { useState, useEffect } from "react";
import { Typography } from "@material-ui/core";
import { Box } from "@material-ui/core";
import { Button, CssBaseline, AppBar, Toolbar } from "@material-ui/core";
import StickyFooter from "./footer";
import Nav from "./Nav";
export default function landing_page() {
  useEffect(() => {
    document.title = "NftPlace | Digital Art Marketplace";
  }, []);
  return (
    <div>
      <CssBaseline />
      <Nav></Nav>
      <StickyFooter></StickyFooter>
    </div>
  );
}
