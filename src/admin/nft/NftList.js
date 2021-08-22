import Nft from './Nft';
import Navbar from '../include/AdminNav';
import React from 'react';

import './home.css';



const NftList = ({itemList})=>{

    return(
        <>
        
        <Navbar/>
        <div class="grid">
                {
                    itemList.map((u)=>{
                        return <Nft key={u.id} {...u}/>
                    })
                }
                </div>
        </>
    );
}

export default NftList;