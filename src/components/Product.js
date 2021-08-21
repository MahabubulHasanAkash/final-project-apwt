import React from "react";

class Product extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            error: null,
            isLoaded: false,
            items: []
        };
    }

    componentDidMount() {
        fetch("http://localhost:8000/api/product")
            .then(res => res.json())
            .then(
                (result) => {
                    console.log(result)
                    this.setState({
                        isLoaded: true,
                        items: result
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
                    <div class="row mt-3">
                                <div class="form-group col-3">
                                    <label>From Date</label>
                                </div>
                                <div class="form-group col-3">
                                <label>To Date</label>
                                </div>
                                <div class="form-group col-3">
                                <label>Status</label>
                                </div>
                            </div >
                            <div class="row">
                                <div class="form-group col-3">
                                    <input type="date" name="from" class="form-control" placeholder="From date" id="from"/>
                                </div>
                                <div class="form-group col-3">
                                    <input type="date" name="to" class="form-control" placeholder="To date" id="to"/>
                                </div>
                                <div class="form-group col-3">
                                    <select name="status" id="" class="form-control">
                                        <option value="">--Select Status--</option>
                                        <option value="1">Available</option>
                                        <option value="0">Out Of Stock</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Submit"></input>
                                </div>
                            </div >
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <label>Product List</label>
                                    <a href="/create-creative" class="btn btn-primary">Add New</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Creative</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {items.map(item => (
                                            <tr key={item.id}>
                                                <img id="profile_image" src={`${process.env.PUBLIC_URL}/logo192.png`} height="80" alt="sss"></img>
                                                <td>{item.name}</td>
                                                <td>{item.description}</td>
                                                <td>{item.price}</td>
                                                <td>{item.status == 1 ? "Available" : "Out Of Stock"}</td>
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

export default Product;