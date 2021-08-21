import React from "react";

class Sales extends React.Component {
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
        fetch("http://localhost:8000/api/sales")
            .then(res => res.json())
            .then(
                (result) => {
                    console.log(result)
                    this.setState({
                        isLoaded: true,
                        items: result.sales,
                        total: result.total
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
        const { error, isLoaded, items, total } = this.state;
        if (error) {
            return <div>Error: {error.message}</div>;
        } else if (!isLoaded) {
            return <div>Loading...</div>;
        } else {
            return (
                <>
                <div class="row mt-3">
                                <div class="form-group col-3">
                                    <label>From Date</label>
                                </div>
                                <div class="form-group col-3">
                                <label>To Date</label>
                                </div>
                                
                            </div >
                            <div class="row">
                                <div class="form-group col-3">
                                    <input type="date" name="from" class="form-control" placeholder="From date" id="from"/>
                                </div>
                                <div class="form-group col-3">
                                    <input type="date" name="to" class="form-control" placeholder="To date" id="to"/>
                                </div>
                                
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success mr-2 float-end" value="Submit"></input>
                                    <a class="btn btn-primary float-end" id="export" href="#">Export to PDF</a>
                                </div>
                            </div >
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Unit Price</th>
                                <th>Total Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            {items.map(item => (
                                <tr key={item.id}>
                                    <td>{item.name}</td>
                                    <td>{item.unit}</td>
                                    <td>{item.unit_price}</td>
                                    <td>{item.unit * item.unit_price}</td>
                                </tr>
                            ))}
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3">Total</td>
                                <td>{total}</td>
                            </tr>
                        </tfoot>
                    </table>
                </>
            );
        }
    }
}

export default Sales;