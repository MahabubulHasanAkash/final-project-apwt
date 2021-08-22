import {Link} from 'react-router-dom';
//import React from 'react';
//import { Button } from '@material-ui/core';
import React from 'react';


const Announcement = ({id,title,details, callback})=>{
    return(
        <>
                <div class="w3-container w3-padding">
                <table>
                    
                    <tr>
                        <td>{id}</td>
                        <td>{title}</td>
                        <td>{details}</td>
                        
                    </tr>
                    
                </table>
                </div>


        </>
    );
}


export default Announcement;