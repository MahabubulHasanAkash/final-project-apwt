import React from "react";

class MemberList extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            error: null,
            isLoaded: false,
            items: []
        };
    }

    componentDidMount() {
        fetch("http://localhost:8000/api/members")
            .then(res => res.json())
            .then(
                (result) => {
                    console.log(result)
                    this.setState({
                        isLoaded: true,
                        items: result.users
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
        if (error) {
            return <div>Error: {error.message}</div>;
        } else if (!isLoaded) {
            return <div>Loading...</div>;
        } else {
            return (
                <>
                    <div>
                        <div class="card mt-5">
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <label>Product List</label>
                                    <a href="/create-creative" class="btn btn-primary">Add New</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-responsive table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Phone</th>
                                            <th>Role</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {items.map(item => (
                                            <tr key={item.id}>
                                                <img id="profile_image" src={`${process.env.PUBLIC_URL}/logo192.png`} height="80" alt="sss"></img>
                                                <td>{item.name}</td>
                                                <td>{item.email}</td>
                                                <td>{item.address}</td>
                                                <td>{item.phone}</td>
                                                <td>{item.roles.name}</td>
                                                <td><a href="update-create" class="btn btn-primary">Edit</a></td>
                                                <td> <a href="delete-create" class="btn btn-danger">Delete</a> </td>
                                            </tr>
                                        ))}

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </>
            );
        }
    }

}

export default MemberList;