import {Link} from 'react-router-dom';
//import React from 'react';
//import { Button } from '@material-ui/core';
import React from 'react';


const DataAnalyst = ({id,name,email,password,usertype,profileImage,phone, callback})=>{
    return(
        <>
                <div class="w3-container w3-padding">
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                    <td>{name}</td>
                    <td>{email}</td>
                </table>
                </div>


        </>
    );
}


export default DataAnalyst;