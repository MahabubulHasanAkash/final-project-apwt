import {Link} from 'react-router-dom';
//import React from 'react';
//import { Button } from '@material-ui/core';
import React from 'react';


const Nft = ({id,creator_id,name, callback})=>{
    return(
        <>
                <div class='content'>
                <p>Name = {name}</p>
                <p>ID = {id}</p>
                <p>creator_id = {creator_id}</p>
                </div>


        </>
    );
}


export default Nft;