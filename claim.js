export default async function handler(req, res) {
  if (req.method === 'POST') {
    const { address, zip_code } = req.body;

    if (address && zip_code) {
      // Simulate success
      res.status(200).json({ 
        success: true, 
        message: "Verification
