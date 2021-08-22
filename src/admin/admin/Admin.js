import {Link} from 'react-router-dom';
//import React from 'react';
//import { Button } from '@material-ui/core';
import React from 'react';


const Admin = ({id,name,email,password,usertype,profileImage,phone, callback})=>{
    return(
        <>
                <div class="w3-container w3-padding">
                
                    {name}
                    {email}
                </div>


        </>
    );
}


export default Admin;