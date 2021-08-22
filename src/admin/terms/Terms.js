import {Link} from 'react-router-dom';
//import React from 'react';
//import { Button } from '@material-ui/core';
import React from 'react';


const Term = ({id,terms, callback})=>{
    return(
        <>
                <div class="w3-container w3-padding">
                <table>
                    <tr>
                        
                        <th>Terms</th>
                    </tr>
                    <td>{id}</td>
                    <td>{terms}</td>
                </table>
                </div>


        </>
    );
}


export default Term;