export default async function handler(req, res) {
  if (req.method === 'POST') {
    const { username, password } = req.body;

    // Simple validation simulation
    if (username && password) {
      // Redirect to the claim page
      res.redirect('/claim.html');
    } else {
      res.status(400).json({ message: 'Please enter username and password' });
    }
  } else {
    res.status(405).json({ message: 'Method not allowed' });
  }
}
