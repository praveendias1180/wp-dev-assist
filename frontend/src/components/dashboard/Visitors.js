import * as React from 'react';
import Link from '@mui/material/Link';
import Table from '@mui/material/Table';
import TableBody from '@mui/material/TableBody';
import TableCell from '@mui/material/TableCell';
import TableHead from '@mui/material/TableHead';
import TableRow from '@mui/material/TableRow';
import Title from './Title';

// Generate Order Data
function createData(id, date, name, shipTo, paymentMethod, amount) {
  return { id, date, name, shipTo, paymentMethod, amount };
}

const rows = [
  createData(
    0,
    '16 November, 2021',
    'Elvis Presley',
    'Tupelo, MS',
    'Google',
    312,
  ),
  createData(
    1,
    '16 November, 2021',
    'Paul McCartney',
    'London, UK',
    'Facebook',
    866,
  ),
  createData(2, '16 November, 2021', 'Tom Scholz', 'Boston, MA', 'ClubHouse', 100),
  createData(
    3,
    '16 November, 2021',
    'Michael Jackson',
    'Gary, IN',
    'Instagram',
    654,
  ),
  createData(
    4,
    '15 November, 2021',
    'Bruce Springsteen',
    'Long Branch, NJ',
    'LinkedIn',
    212,
  ),
];

function preventDefault(event) {
  event.preventDefault();
}

export default function Visitors() {
  return (
    <React.Fragment>
      <Title>Recent Visitors</Title>
      <Table size="small">
        <TableHead>
          <TableRow>
            <TableCell>Date</TableCell>
            <TableCell>Name</TableCell>
            <TableCell>Location</TableCell>
            <TableCell>Source</TableCell>
            <TableCell align="right">PageViews</TableCell>
          </TableRow>
        </TableHead>
        <TableBody>
          {rows.map((row) => (
            <TableRow key={row.id}>
              <TableCell>{row.date}</TableCell>
              <TableCell>{row.name}</TableCell>
              <TableCell>{row.shipTo}</TableCell>
              <TableCell>{row.paymentMethod}</TableCell>
              <TableCell align="right">{`${row.amount}`}</TableCell>
            </TableRow>
          ))}
        </TableBody>
      </Table>
      <Link color="primary" href="#" onClick={preventDefault} sx={{ mt: 3 }}>
        See more visitors
      </Link>
    </React.Fragment>
  );
}
