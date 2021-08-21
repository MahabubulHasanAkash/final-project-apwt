import React from "react";

class CreateMenber extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            error: null,
            isLoaded: false,
            items: [],
            total: Number
        };
    }
    

    componentDidMount() {
        
        fetch("http://localhost:8000/api/roles")
            .then(res => res.json())
            .then(
                (result) => {
                    console.log(result)
                    this.setState({
                        isLoaded: true,
                        items: result.roles
                    });
                },
                (error) => {
                    this.setState({
                        isLoaded: true,
                        error
                    });
                }
            )
    }


    render() {
        const { error, isLoaded, items } = this.state;
        return (
            <>
                <div class="mt-2">
                    <div class="card">
                        <div class="card-header">
                            <label className="font-bold">Add New Member</label>
                        </div>
                        <div class="card-body">
                            <form name="memberAdd" method="post" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <div class="col-md-8 offset-md-2">
                                        <label>Upload Profile Image</label>
                                        <input class="form-control" name="file" type="file" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-8 offset-md-2">
                                        <label>Enter Full Name</label>
                                        <input autocomplete="off" class="form-control" id="FullName" name="name" placeholder="Enter fullname" type="text" value="" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-8 offset-md-2">
                                        <label>Enter Email Address</label>
                                        <input autocomplete="off" class="form-control" id="Email" name="email" placeholder="Enter email" type="text" value="" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-8 offset-md-2">
                                        <label>Enter Address</label>
                                        <input autocomplete="off" class="form-control" id="Email" name="address" placeholder="Enter address" type="text" value="" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-8 offset-md-2">
                                        <label>Enter Phone</label>
                                        <input autocomplete="off" class="form-control" id="Email" name="phone" placeholder="Enter phone" type="text" value="" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-8 offset-md-2">
                                        <label>Select Role</label>
                                        <select class="form-control" name="role">
                                        <option value="">--select--</option>
                                        
                                        {items.map(item => (
                                             <option value={item.id}>{item.name}</option>
                                        ))}
                                            
                                           
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-8 offset-md-2">
                                        <label>Enter Password</label>
                                        <input autocomplete="off" class="form-control" id="Password" name="password" placeholder="Password" type="password" value="" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-8 offset-md-2">
                                        <label>Confirm Password</label>
                                        <input autocomplete="off" class="form-control" id="ConPassword" name="conpassword" placeholder="Confirm password" type="password" value="" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-8 offset-md-2">
                                        <input type="submit" class="btn" value="Submit" style={{background: '#880E4F', color: 'white', fontWeight: 'bold' }}/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </>
        );
    }
}

export default CreateMenber;