/* ============================================
   Page One Insights — Effects
   Visual effects library
   ============================================ */

// ─── Ticker Strips ───────────────────────────────────────────────────────────
// Computes --ticker-duration from the first .ticker-group's rendered width and
// --ticker-speed (px per second) so perceived speed is consistent on every
// viewport — wide desktop and narrow mobile scroll at the same pace.
function initTickers() {
  document.querySelectorAll('.ticker-strip').forEach(function(strip) {
    var track = strip.querySelector('.ticker-track');
    var group = strip.querySelector('.ticker-group');
    if (!track || !group) return;

    // --ticker-speed is a unitless px/s value set on .ticker-strip in CSS.
    var speed = parseFloat(
      getComputedStyle(strip).getPropertyValue('--ticker-speed')
    ) || 80;

    var groupWidth = group.offsetWidth;
    if (!groupWidth) return;

    // duration = distance ÷ speed  (translateX goes -50% = one group width)
    var duration = groupWidth / speed;
    track.style.setProperty('--ticker-duration', duration.toFixed(2) + 's');
  });
}

// Layout must be settled before measuring offsetWidth.
if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initTickers);
} else {
  initTickers();
}
